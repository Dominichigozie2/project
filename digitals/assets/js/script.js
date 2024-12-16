function userCard(){
    $('#userCard').load('assets/php/log.php?mode=userCard');
}
function vendorCard(){
    $('#vendorCard').load('assets/php/log.php?mode=vendorCard');
}

$(document).ready(function(){
    // product grid starts {
    var currentPage = 1;
    var searchProduct = '';
    var dropdownCategory = 'ALL';
    var dropdownOrderBy = 'ALL';

    // Function to fetch and populate products
    function fetchProducts(page) {
        $.ajax({
            url: 'fetch_product.php',
            type: 'GET',
            data: {
                page: page,
                searchProduct: searchProduct,
                dropdownCategory: dropdownCategory,
                dropdownOrderBy: dropdownOrderBy
            },
            dataType: 'json',
            success: function(response) {
                // Clear the product grid
                $('#productGrid').empty();

                // Iterate through the products and append them to the grid
                $.each(response.products, function(index, product) {
                    var cardHtml = `
                        <div class="col-lg-3 col-md-4 col-sm-6" id="${product.pid}">
                            <div class="card-wrapper">
                                <div class="card-container">
                                    <div class="card-top">
                                        <img class="card-image" src="${product.image}" alt="" />
                                    </div>
                                    <div class="card-bottom">
                                        <h3>${product.name}</h3>
                                        <p>$${product.price}</p>
                                    </div>
                                    <div class="card-action">
                                        <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div>
                                        <a class="card-preview" href="product-detail.php?pid=${product.pid}"><i class="mdi mdi-eye-outline"></i></a>
                                        <div class="card-remove" data-id="${product.pid}"><i class="mdi mdi mdi-delete-outline"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    $('#productGrid').append(cardHtml);
                });

                // Update the pagination buttons
                $('#pagination').empty();
                for (var i = 1; i <= response.totalPages; i++) {
                    var activeClass = i === page ? 'active' : '';
                    var pageHtml = `
                        <li class="page-item ${activeClass}">
                            <a class="page-link" href="#" data-page="${i}">${i}</a>
                        </li>
                    `;
                    $('#pagination').append(pageHtml);
                }
            },
            error: function() {
                console.log('Error occurred while fetching products.');
            }
        });
    }

    // Initial fetch on page load
    fetchProducts(currentPage);

    // Handle search input change
    $(document).on('input', '#searchProduct', function() {
        searchProduct = $(this).val();
        currentPage = 1;
        fetchProducts(currentPage);
    });

    // Handle category dropdown change
    $(document).on('change', '#dropdownCategory', function() {
        dropdownCategory = $(this).val();
        currentPage = 1;
        fetchProducts(currentPage);
    });

    // Handle order by dropdown change
    $(document).on('change', '#dropdownOrderBy', function() {
        dropdownOrderBy = $(this).val();
        currentPage = 1;
        fetchProducts(currentPage);
    });

    // Handle pagination button click
    $(document).on('click', '#pagination .page-link', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        currentPage = page;
        fetchProducts(page);
    });

    $(document).on('click', '.card-remove', function(){
        var id=$(this).attr('data-id');
        console.log(id);
        $.ajax({
            url:'assets/php/log.php?mode=product-delete',
            data:{
                id:id
            },
            type:'POST',
            success:function(response){
                console.log(response)
                if(response=='deleted'){
                    $('#'+id).remove();
                }
            }
        })
    });

    // product grid ends}

    userCard();
    vendorCard();
    setInterval(function(){
        userCard();
        vendorCard();
    }, 10000);

    $('.error').hide();

    $("#reloadButton").click(function() {
        location.reload();
    });

    $("#image-re").hide();
    $("#avatar-btn").click(function(){
        $("#image-re").toggle();
    })
    // $(document).click(function(event) {
    //     if (!$(event.target).closest('#image-re').length && !$(event.target).is('#avatar-btn')) {
    //         $('#image-re').hide();
    //     }
    // });

    $(".Card").on('click', '.viewBtn', function(event){
        event.preventDefault(); 
        var id = $(this).data('id');
        $.ajax({
            url : 'assets/php/log.php?mode=user_data',
            data: {
                id: id
            },
            type: 'post',
            success: function(data) {
                var json = JSON.parse(data);
                // alert();
                $('#product').html(json.t_product);
                $('#sells').html(json.t_sell);
                $('#payouts').html('$'+json.payout);
                $('#names').html(json.firstname+" "+json.lastname);
                $('.email').html(json.email);
                $('#address').html(json.address+", "+json.city+", "+json.country+".");
                if(json.img==""){
                    $("#img").attr('src', 'assets/img/user1.png');
                }
                else{
                    $("#img").attr('src', json.img);
                }
                var date_str = json.date;
                var date = moment(date_str, "YY-MM-DD HH:mm:ss");
                var formatted_date = date.format("MMM DD, YYYY");
                $('#date').html(formatted_date);

                // alert(json.lastname);
            }
        });
    });

    var directory = "assets/img/vendor"; // Replace with the path to your directory
	var imageTypes = ["jpg"];
	$.ajax({
		url: directory,
		success: function(data) {
			$(data).find("a:contains(" + imageTypes.join("), a:contains(") + ")").each(function() {
				var imageFile = $(this).attr("href");
				$("#image-re").append('<div class="col-sm-3"><img src="' + directory + '/' + imageFile + '" alt="image" class="img-ava" style="width:50px;"></div>');
			});
		}
	});

    $("#image-re").on('click', '.img-ava', function(){
        img=this.src;
        var fullUrl = img;
        var imgLink = fullUrl.split('ekka-admin/')[1];
        $(".ec-image-preview").attr('src', img);
        $("#image-re").toggle();
        $("#img-link").val(imgLink)
    })


    $('#user-table').on('click', '.editBtn', function(event){
        event.preventDefault(); 
        // $("#editUser").modal("show");
        var id = $(this).data('id');
        // console.log(id);
        $.ajax({
            url : 'assets/php/log.php?mode=user_data',
            data: {
                id: id
            },
            type: 'post',
            success: function(data) {
                var json = JSON.parse(data);
                $('#userFirstname').val(json.firstname);
                $('#userLastname').val(json.lastname);
                $('#userEmail').val(json.email);
                $('#userAddress').val(json.address);
                $('#img-link').val(json.img);
                if(json.img==""){
                    $(".ec-image-preview").attr('src', 'assets/img/user1.png');
                }
                else{
                    $(".ec-image-preview").attr('src', json.img);
                }
                $('#uid').val(json.uid);
                $('#status').val(json.status);
                $('#date').val(json.date);
                // alert(json.lastname);
            }
        });
    });

    $('#vendor-table').on('click', '.deleteBtn', function(event){
        event.preventDefault();
        // $("#deleteModal").modal("show");
        var id = $(this).data('id');
        $("#delid").val(id);
    });

    $('#user-table').on('click', '.deleteBtn', function(event){
        event.preventDefault();
        // $("#deleteModal").modal("show");
        var id = $(this).data('id');
        $("#delid").val(id);
    });

    $('#vendor-table').on('click', '.editBtn', function(event){
        event.preventDefault(); 
        // $("#editVendor").modal("show");
        var id = $(this).data('id');
        // console.log(id);
        $.ajax({
            url : 'assets/php/log.php?mode=user_data',
            data: {
                id: id
            },
            type: 'post',
            success: function(data) {
                var json = JSON.parse(data);
                $('#userFirstname').val(json.firstname);
                $('#userLastname').val(json.lastname);
                $('#userEmail').val(json.email);
                $('#userAddress').val(json.address);
                $('#img-link').val(json.img);
                if(json.img==""){
                    $(".ec-image-preview").attr('src', 'assets/img/user1.png');
                }
                else{
                    $(".ec-image-preview").attr('src', json.img);
                }
                $('#uid').val(json.uid);
                $('#status').val(json.status);
                $('#date').val(json.date);
                // alert(json.lastname);
            }
        });
    });


    // edit user inputs validation
    $('#userFirstname').on('input', function(){
        var inputVal = $(this).val();
        var regex = /^[a-zA-Z0-9][a-zA-Z0-9\s]*$/; // regular expression to avoid first character being a space

        if (!regex.test(inputVal.trim())) {
            $(this).val(inputVal.replace(/[^a-zA-Z0-9\s]/g, '').trim()); // replace leading spaces with empty string
        }
        else{
            $("#userFirstname-error").hide();
        }
    });
    $('#userLastname').on('input', function(){
        var inputVal = $(this).val();
        var regex = /^[a-zA-Z0-9][a-zA-Z0-9\s]*$/; // regular expression to avoid first character being a space

        if (!regex.test(inputVal.trim())) {
            $(this).val(inputVal.replace(/[^a-zA-Z0-9\s]/g, '').trim()); // replace leading spaces with empty string
        }
        else{
            $("#userLastname-error").hide();
        }
    });
    $('#userEmail').on('input', function() {
        var inputVal = $(this).val();
        var regex = /^[a-zA-Z0-9@][a-zA-Z0-9@.,\s]*$/; // Only allow letters and numbers
      
        if (!regex.test(inputVal)) {
            $(this).val(inputVal.replace(/[^a-zA-Z0-9@.,\s]/g, '').trim()); // Remove any special characters
        }
        $("#loginEmail-error").hide();
    });
    $('#userAddress').on('input', function(){
        var inputVal = $(this).val();
        var regex = /^[a-zA-Z0-9@][a-zA-Z0-9@.,\s]*$/; // regular expression to avoid first character being a space

        if (!regex.test(inputVal.trim())) {
            $(this).val(inputVal.replace(/[^a-zA-Z0-9@.,\s]/g, '').trim()); // replace leading spaces with empty string
        }
        else{
            $("#userAddress-error").hide();
        }
    });

    // Define user edit inputs validation function
    function validateInput(firstname, lastname, email, address) {
        if ($.trim(firstname) == "") {
            $("#userFirstname-error").show();
			$("#userFirstname-error").html("firstname is required.");
			return false;
		}
        else if ($.trim(lastname) == "") {
            $("#userLastname-error").show();
			$("#userLastname-error").html("lastname is required.");
			return false;
		}
		else if ($.trim(email) == "") {
            $("#loginEmail-error").show();
			$("#loginEmail-error").html("Email is required.");
			return false;
		} else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
            $("#loginEmail-error").show();
			$("#loginEmail-error").html("Invalid email format.");
			return false;
		} else if ($.trim(address) == "") {
			$("#userAddress-error").html("address is required.");
            $("#userAddress-error").show();
			return false;
		} else {
            $(".error").hide();
			return true;
		}
	};

    $("#user-edit").submit(function(e) {
        e.preventDefault();
      
        var firstname = $("#userFirstname").val();
        var lastname = $("#userLastname").val();
        var email = $("#userEmail").val();
        var address = $("#userAddress").val();
        var img = $("#img-link").val();
        var uid = $("#uid").val();
        var statuss = $("#status").val();
        var date = $("#date").val();
      
        // Validate input
        if (validateInput(firstname, lastname, email, address)) {
          var formData = $(this).serialize();
      
          $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=userEdit',
            data: formData,
            success: function(data) {
              var json = JSON.parse(data);
              var status = json.status;
              if (status == 'true') {
                // Update data in the database successful
                $('#editUser').hide();
                $('.modal-backdrop').hide();
                
                // Update data in DataTable
                var table = $('#user').DataTable();
                var row = table.row("[id='" + uid + "']");
                var rowData = row.data();
                rowData[1] = uid;
                rowData[2] = '<td><img class="vendor-thumb" src="' + img + '" alt="user profile" /></td>';
                rowData[3] = firstname + " " + lastname;
                rowData[4] = email;
                rowData[5] = statuss;
                rowData[6] = date;
                row.data(rowData);
                row.invalidate();
      
                // Update successful message or perform any additional actions
                console.log('Update successful');
              } else {
                alert('Failed');
              }
            }
        });
        }
    });
    
    $("#vendor-edit").submit(function(e) {
        e.preventDefault();
      
        var firstname = $("#userFirstname").val();
        var lastname = $("#userLastname").val();
        var email = $("#userEmail").val();
        var address = $("#userAddress").val();
        var img = $("#img-link").val();
        var uid = $("#uid").val();
        var statuss = $("#status").val();
        var date = $("#date").val();
      
        // Validate input
        if (validateInput(firstname, lastname, email, address)) {
          var formData = $(this).serialize();
      
          $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=userEdit',
            data: formData,
            success: function(data) {
              var json = JSON.parse(data);
              var status = json.status;
              if (status == 'true') {
                // Update data in the database successful
                $('#editVendor').hide();
                $('.modal-backdrop').hide();
                
                // Update data in DataTable
                var table = $('#vendor').DataTable();
                var row = table.row("[id='" + uid + "']");
                var rowData = row.data();
                rowData[1] = uid;
                rowData[2] = '<td><img class="vendor-thumb" src="' + img + '" alt="user profile" /></td>';
                rowData[3] = firstname + " " + lastname;
                rowData[4] = email;
                rowData[7] = statuss;
                rowData[8] = date;
                row.data(rowData);
                row.invalidate();
      
                // Update successful message or perform any additional actions
                console.log('Update successful');
              } else {
                alert('Failed');
              }
            }
          });
        }
    });
    $("#delUser").submit(function(e) {
        e.preventDefault();
        var id = $('#delid').val();
        // console.log(id);
        $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=delUser',
            data: {id: id},
            success: function(data){
                // console.log('Response:', data);
                var json = JSON.parse(data);
                var status = json.status;
                if (status == 'true') {
                    // Update data in the database successful
                    $('#deleteModal').modal("hide");

                    var table = $('.datab').DataTable();
                    var row = table.row("[id='" + id + "']");
                    row.remove().draw();
                }
                
            }
        });

    });

    $("#name").on("input", function() {
        var inputValue = $(this).val();
        var sanitizedValue = inputValue.replace(/^\s+/, "").replace(/[^a-zA-Z0-9]+/g, "");
        $(this).val(sanitizedValue);
    });

    $("#new_category").submit(function(e) {
        e.preventDefault();
      

        var name = $("#name").val();

          

        function validate_categoryName(name){
            if ($.trim(name) == "") {
                $(".error").hide();
                $(".category-error").show();
                $(".category-error").html("Category name is required.");
                return false;
            }
            else{
                $(".error").hide();
                return true;
            }
        }
        // Validate input
        if (validate_categoryName(name)) {
          var formData = $(this).serialize();
      
          $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=newCategory',
            data: formData,
            success: function(data) {
                var json = JSON.parse(data);
                var status = json.status;
                if (status == 'true') {
                    // Update data in the database successful
                    $('.error').hide();
                    $('.alert-success').show();
                    $("#name").val("");
                    location.reload();
                    
                }
                else if (status == 'category already exist') {
                    $('.category-error').show();
                    $('.category-error').html(status);
                }
                else {
                    alert('Failed');
                }
            }
          });
        }
    });
    $("#new_subCategory").submit(function(e) {
        e.preventDefault();
      
 
        var name = $("#name").val();
        var parent_category = $("#parent_category").val();

          

        function validate_categoryName(name, parent_category){
            if ($.trim(name) == "") {
                $(".error").hide();
                $(".category-error").show();
                $(".category-error").html("Category name is required.");
                return false;
            }
            else if ($.trim(parent_category) == "") {
                $(".error").hide();
                $(".category-error").show();
                $(".category-error").html("Select parent category.");
                return false;
            }
            else{
                $(".error").hide();
                return true;
            }
        }
        // Validate input
        if (validate_categoryName(name, parent_category)) {
          var formData = $(this).serialize();
      
          $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=new_subCategory',
            data: formData,
            success: function(data) {
                var json = JSON.parse(data);
                var status = json.status;
                if (status == 'true') {
                    // Update data in the database successful
                    $('.error').hide();
                    $('.alert-success').show();
                    $("#name").val("");
                    location.reload();
                    
                }
                else if (status == 'Sub category already exist') {
                    $('.category-error').show();
                    $('.category-error').html(status);
                }
                else {
                    alert('Failed');
                }
            }
          });
        }
    });

    

    $("#product_name").on("input", function() {
        var inputValue = $(this).val();
        var sanitizedValue = inputValue.replace(/^\s+/, "").replace(/[^a-zA-Z0-9., ]+/g, "");
        var slugValue = sanitizedValue.replace(/\s+/g, ""); // Remove spaces from sanitized value
        $("#slug").val(slugValue);
    });      
    $("#slug").on("input", function() {
        var inputValue = $(this).val();
        var sanitizedValue = inputValue.replace(/^\s+/, "").replace(/[^a-zA-Z0-9-_]+/, "").replace(/\s/g, "");
        $(this).val(sanitizedValue);
    });
    $("#sort_description").on("input", function() {
        var inputValue = $(this).val();
        var sanitizedValue = inputValue.replace(/^\s+/, "").replace(/[^a-zA-Z0-9.,' ]+/g, "");
        var maxLength = 200;
        var truncatedValue = sanitizedValue.slice(0, maxLength);
      
        $(this).val(truncatedValue);
        $("#characterCount").text(truncatedValue.length + "/" + maxLength)
    });
    $("#full_details").on("input", function() {
        var inputValue = $(this).val();
        var sanitizedValue = inputValue.replace(/^\s+/, "").replace(/[^a-zA-Z0-9.,' ]+/g, "");
        var maxLength = 5000;
        var truncatedValue = sanitizedValue.slice(0, maxLength);
      
        $(this).val(truncatedValue);
        $("#characterCount").text(truncatedValue.length + "/" + maxLength);
    });      
    $("#product_tag").on("input", function() {
        var inputValue = $(this).val();
        var sanitizedValue = inputValue.replace(/^\s+/, "").replace(/[^a-zA-Z0-9, ]+/g, "");
        $(this).val(sanitizedValue);
    });

    $('#categories').change(function() {
        var category = $(this).val();
        // Clear previous subcategories
        $('#sub_categories').empty();
  
        
        if(category !== ""){
        // Make AJAX request to fetch subcategories
            $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=get_subcategories', // Replace with your PHP file that retrieves subcategories
            data: { category: category },
            success: function(response) {
                var subcategories = JSON.parse(response);
                // Populate the subcategories dropdown
                if(subcategories.length <= 0){
                    $('#sub_categories').html('<option value="">No subcategories available</option>');
                }
                else{
                    subcategories.forEach(function(subcategory) {
                    $('#sub_categories').append('<option value="' + subcategory + '">' + subcategory + '</option>');
                    });
                }
            }
            });
        }
    });

    function validateProduct(img1, product_name, categories, sub_categories, slug, sort_description, price, quantity, full_details, product_tag) {
        // Regular expression pattern for special characters validation
        const specialCharactersRegex = /^[^!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]*$/;
      
        // Perform validation checks here
        if (!img1 || img1.trim() === '' || img1.trim() === 'assets/img/products/vender-upload-preview.jpg') {
            $('.error').hide();
            $('#img1-error').html('Please first image is compulsory.');
            $('#img1-error').show();
            $('#img1-error').css('color','red');
            return false;
        }
      
        if (!product_name || product_name.trim() === '' || product_name.startsWith(' ')) {
            $('.error').hide();
            $('#name-error').html('product name is required');
            $('#name-error').show();
            $('#name-error').css('color','red');
            return false;
        }
      
        if (!categories || categories.length === 0) {
            $('.error').hide();
            $('#category-error').html('category is required');
            $('#category-error').show();
            $('#category-error').css('color','red');
            return false;
        }
      
        if (!sub_categories || sub_categories.length === 0) {
            $('.error').hide();
            $('#sub_category-error').html('sub category is required');
            $('#sub_category-error').show();
            $('#sub_category-error').css('color','red');
            return false;
        }
      
        if (!slug || slug.trim() === '' || slug.startsWith(' ')) {
            $('.error').hide();
            $('#slug-error').html('slug is required');
            $('#slug-error').show();
            $('#slug-error').css('color','red');
            return false;
        }
      
        if (!/^[a-zA-Z0-9.\-_]+$/.test(slug)) {
            $('.error').hide();
            $('#slug-error').html('slug should only contain letters, numbers, hyphens, and underscores.');
            $('#slug-error').show();
            $('#slug-error').css('color','red');
            return false;
        }
      
        if (!sort_description || sort_description.trim() === '') {
            $('.error').hide();
            $('#sort_description-error').html('please enter a valid short description');
            $('#sort_description-error').show();
            $('#sort_description-error').css('color','red');
            return false;
        }
      
        if (sort_description.trim().length < 50 || sort_description.trim().length > 200) {
            $('.error').hide();
            $('#sort_description-error').html('sort description should be between 50 and 200 characters');
            $('#sort_description-error').show();
            $('#sort_description-error').css('color','red');
            return false;
        }
      
        if (!specialCharactersRegex.test(product_name)) {
            $('.error').hide();
            $('#name-error').html('product name should not contain special characters apart from . and ,');
            $('#name-error').show();
            $('#name-error').css('color','red');
            return false;
        }
      
        // if (!specialCharactersRegex.test(slug)) {
        //   alert('Slug should not contain special characters apart from - and _');
        //   return false;
        // }
      
        if (!price || isNaN(price) || price <= 0) {
            $('.error').hide();
            $('#price-error').html('please enter a valid price');
            $('#price-error').show();
            $('#price-error').css('color','red');
            return false;
        }
      
        if (!quantity || isNaN(quantity) || quantity < 0) {
            $('.error').hide();
            $('#quantity-error').html('please enter a valid quantity');
            $('#quantity-error').show();
            $('#quantity-error').css('color','red');
            return false;
        }
      
        if (!full_details || full_details.trim() === '') {
            $('.error').hide();
            $('#full_details-error').html('full details is required');
            $('#full_details-error').show();
            $('#full_details-error').css('color','red');
            return false;
        }
      
        if (full_details.trim().length < 200 || full_details.trim().length > 5000) {
            $('.error').hide();
            $('#full_details-error').html('full details should be between 200 and 5000 characters');
            $('#full_details-error').show();
            $('#full_details-error').css('color','red');
            return false;
        }
      
        // if (!specialCharactersRegex.test(full_details)) {
        //     $('.error').hide();
        //     $('#full_details-error').html("full details should not contain special characters apart from . and , and '");
        //     $('#full_details-error').show();
        //     $('#full_details-error').css('color','red');
        //     return false;
        // }
      
        if (!product_tag || product_tag.length === 0) {
            $('.error').hide();
            $('#product_tag-error').html('please select at least one product tag');
            $('#product_tag-error').show();
            $('#product_tag-error').css('color','red');
            return false;
        }
      
        return true;
    }      
      
    $("#productAdd").submit(function(e) {
        e.preventDefault();
      
        var img1 = $('#preview1').attr('src');
        var img2 = $('#preview2').attr('src');
        var img3 = $('#preview3').attr('src');
        var img4 = $('#preview4').attr('src');
        var img5 = $('#preview5').attr('src');
        var img6 = $('#preview6').attr('src');
        var img7 = $('#preview7').attr('src');
        var product_name = $("#product_name").val();
        var categories = $("#categories").val();
        var sub_categories = $("#sub_categories").val();
        var slug = $("#slug").val();
        var sort_description = $("#sort_description").val();
        var price = $("#price").val();
        var quantity = $("#quantity").val();
        var full_details = $("#full_details").val();
        var product_tag = $("#product_tag").val();
        var gender = $('input[name="gender"]:checked').val();
      
        // Validate input
        if (validateProduct(img1, product_name, categories, sub_categories, slug, sort_description, price, quantity, full_details, product_tag)) {
        //   var formData = $(this).serialize();
        
          $.ajax({
            type: 'POST',
            url: 'assets/php/log.php?mode=productAdd',
            data: {
                img1: img1,
                img2: img2,
                img3: img3,
                img4: img4,
                img5: img5,
                img6: img6,
                img7: img7,
                product_name: product_name,
                categories: categories,
                sub_categories: sub_categories,
                slug: slug,
                sort_description: sort_description,
                price: price,
                quantity: quantity,
                full_details: full_details,
                product_tag: product_tag,
                gender: gender
            },
            success: function(response) {
            //   var json = JSON.parse(response);
            //   var status = json.status;
            //   if (status == 'true') {
            //     // Update data in the database successful
            //     $('#editUser').hide();
            //     $('.modal-backdrop').hide();
            //     // Update successful message or perform any additional actions
            //     console.log(response);
            //   } else {
            //     // alert('Failed');
            //   }
                console.log(response);
            }
          });
        }
    });
    
})
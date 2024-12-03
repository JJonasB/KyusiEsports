<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCEaddproduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
<div class="wrapper1">
    <!-- Header Section -->
    <?php include "#Navbar.php"; ?>

    <!-- Main Body Section -->
    <main>
        <p class="titlepage">Y<span class="redcolor-title">O</span>UR P<span class="redcolor-title">R</span>OD<span class="redcolor-title">U</span>CT</p>
        <div class="photo-containers">

            <!-- Container 1 -->
            <div class="container1">
                <figure class="image-container">
                <p class="plus">+</p>
                    <img id="chosen-image1" alt="Uploaded Image" style="display: none;">
                    <figcaption id="file-name1"></figcaption>
                </figure>
                <input type="file" id="upload-button1" accept="image/*">
                <label for="upload-button1">
                    <i class="fas fa-file-import"></i> &nbsp;
                    add A Photo
                </label>
            </div>

            <!-- Container 2 -->
            <div class="container1">
                <figure class="image-container">
                <p class="plus">+</p>
                    <img id="chosen-image2" alt="Uploaded Image" style="display: none;">
                    <figcaption id="file-name2"></figcaption>
                </figure>
                <input type="file" id="upload-button2" accept="image/*">
                <label for="upload-button2">
                    <i class="fas fa-file-import"></i> &nbsp;
                    add A Photo
                </label>
            </div>

            <!-- Container 3 -->
            <div class="container1">
                <figure class="image-container">
                <p class="plus">+</p>
                    <img id="chosen-image3" alt="Uploaded Image" style="display: none;">
                    <figcaption id="file-name3"></figcaption>
                </figure>
                <input type="file" id="upload-button3" accept="image/*">
                <label for="upload-button3">
                    <i class="fas fa-file-import"></i> &nbsp;
                    add A Photo
                </label>
            </div>

            <!-- Container 4 -->
            <div class="container1">
                <figure class="image-container">
                <p class="plus">+</p>
                    <img id="chosen-image4" alt="Uploaded Image" style="display: none;">
                    <figcaption id="file-name4"></figcaption>
                </figure>
                <input type="file" id="upload-button4" accept="image/*">
                <label for="upload-button4">
                    <i class="fas fa-file-import"></i> &nbsp;
                    add A Photo
                </label>
            </div>

            <!-- Container 5 -->
            <div class="container1">
                <figure class="image-container">
                <p class="plus">+</p>
                    <img id="chosen-image5" alt="Uploaded Image" style="display: none;">
                    <figcaption id="file-name5"></figcaption>
                </figure>
                <input type="file" id="upload-button5" accept="image/*">
                <label for="upload-button5">
                    <i class="fas fa-file-import"></i> &nbsp;
                    add A Photo
                </label>
            </div>

        </div>
</div>     


        <div class="wrapper2">
        <div class="product-details">
            
            <center>
            <p class="Product-Title" for="productName">Product Name:
            <input type="text" id="productName" name="productName" placeholder="Enter Product Name"></p>
            
            <p class="Product-Title" for="productDescription">Product Description:
            <input type="text" id="productName" name="productName" placeholder="Enter Product Description"></p>
            </center>

            <center>
            <div class="product-details2">
                <p class="product-details2-title"><i class="fas fa-info-circle"></i>Product  Details</p>
            <p class="Product-Title2" for="category"><i class="fas fa-list-ul"></i>Product Category:</p>
                <select id="category" name="category" required>
                    <option value="" disabled selected>Select a Category</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="accessories">Accessories</option>
                    <option value="sports">Sports & Outdoors</option>
                </select>

                <p class="Product-Title2" for="price"><i class="fas fa-hand-holding-usd"></i>Price:</p>
                <input type="number" id="price" name="price" placeholder="Enter Price" required>

                <p class="Product-Title2" for="sku"><i class="fas fa-layer-group"></i>Stock:</p>
                <input type="number" id="sku" name="sku" placeholder="Enter Stock" required>

                <p class="Product-Title2" for="quantity"><i class="fas fa-boxes"></i>Quantity:</p>
                <input type="number" id="quantity" name="quantity" placeholder="Enter Product Quantity" required>

                <p class="Product-Title2" for="shipping"><i class="fas fa-shipping-fast"></i>Shipping Options:</p>
                <select id="shipping" name="shipping">
                <option value="standard">Standard</option>
                <option value="Delivery">Delivery</option>
                <option value="pickup">Pick-up</option>
                <!-- More shipping options -->
                </select>

                <p class="Product-Title2" for="location"><i class="fas fa-map-marker-alt"></i>Location:</p>
                <select id="location" name="location">
                <option value="standard">Campus</option>
                <option value="Delivery">San Bartolome (Main)</option>
                <option value="pickup">San Francisco</option>
                <option value="meetup">Batasan</option>
                <!-- More shipping options -->
                </select>

                <div class="btn2">
                <button class="save"><i class="fas fa-save"></i>save</button>
                <button class="publish"><i class="fas fa-upload"></i>publish</button>
                </div>
            </div>
            </center>
                
                
        </div>
    </main>
</div>    

    
    
    
    
    
    
    
    
    
    
    <!-- Footer -->
    <?php include "#Footer.php"; ?>
</div>

<!-- External JavaScript -->
<script>
    // First container's image and file input
    let uploadButton1 = document.getElementById("upload-button1");
    let chosenImage1 = document.getElementById("chosen-image1");
    let fileName1 = document.getElementById("file-name1");

    uploadButton1.onchange = () => {
        if (uploadButton1.files && uploadButton1.files[0]) {
            let reader1 = new FileReader();
            reader1.readAsDataURL(uploadButton1.files[0]);

            reader1.onload = () => {
                chosenImage1.setAttribute("src", reader1.result);
                chosenImage1.style.display = "block"; // Show the image
                fileName1.textContent = uploadButton1.files[0].name; // Show the file name
            };

            reader1.onerror = (error) => {
                console.error("Error reading file:", error);
            };
        } else {
            console.log("No file selected");
        }
    };

    // Second container's image and file input
    let uploadButton2 = document.getElementById("upload-button2");
    let chosenImage2 = document.getElementById("chosen-image2");
    let fileName2 = document.getElementById("file-name2");

    uploadButton2.onchange = () => {
        if (uploadButton2.files && uploadButton2.files[0]) {
            let reader2 = new FileReader();
            reader2.readAsDataURL(uploadButton2.files[0]);

            reader2.onload = () => {
                chosenImage2.setAttribute("src", reader2.result);
                chosenImage2.style.display = "block"; // Show the image
                fileName2.textContent = uploadButton2.files[0].name; // Show the file name
            };

            reader2.onerror = (error) => {
                console.error("Error reading file:", error);
            };
        } else {
            console.log("No file selected");
        }
    };

    // Third container's image and file input
    let uploadButton3 = document.getElementById("upload-button3");
    let chosenImage3 = document.getElementById("chosen-image3");
    let fileName3 = document.getElementById("file-name3");

    uploadButton3.onchange = () => {
        if (uploadButton3.files && uploadButton3.files[0]) {
            let reader3 = new FileReader();
            reader3.readAsDataURL(uploadButton3.files[0]);

            reader3.onload = () => {
                chosenImage3.setAttribute("src", reader3.result);
                chosenImage3.style.display = "block"; // Show the image
                fileName3.textContent = uploadButton3.files[0].name; // Show the file name
            };

            reader3.onerror = (error) => {
                console.error("Error reading file:", error);
            };
        } else {
            console.log("No file selected");
        }
    };

    // Fourth container's image and file input
    let uploadButton4 = document.getElementById("upload-button4");
    let chosenImage4 = document.getElementById("chosen-image4");
    let fileName4 = document.getElementById("file-name4");

    uploadButton4.onchange = () => {
        if (uploadButton4.files && uploadButton4.files[0]) {
            let reader4 = new FileReader();
            reader4.readAsDataURL(uploadButton4.files[0]);

            reader4.onload = () => {
                chosenImage4.setAttribute("src", reader4.result);
                chosenImage4.style.display = "block"; // Show the image
                fileName4.textContent = uploadButton4.files[0].name; // Show the file name
            };

            reader4.onerror = (error) => {
                console.error("Error reading file:", error);
            };
        } else {
            console.log("No file selected");
        }
    };

    // Third container's image and file input
    let uploadButton5 = document.getElementById("upload-button5");
    let chosenImage5 = document.getElementById("chosen-image5");
    let fileName5 = document.getElementById("file-name5");

    uploadButton5.onchange = () => {
        if (uploadButton5.files && uploadButton5.files[0]) {
            let reader5 = new FileReader();
            reader5.readAsDataURL(uploadButton5.files[0]);

            reader5.onload = () => {
                chosenImage5.setAttribute("src", reader5.result);
                chosenImage5.style.display = "block"; // Show the image
                fileName5.textContent = uploadButton5.files[0].name; // Show the file name
            };

            reader5.onerror = (error) => {
                console.error("Error reading file:", error);
            };
        } else {
            console.log("No file selected");
        }
    };
</script>
</body>

</html>

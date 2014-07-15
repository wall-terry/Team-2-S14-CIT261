<!DOCTYPE html>
<!--
Development underway by TM Thoughtworks 
-->
<html>
    <head>
        <title> Enter Order Form </title>
        <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/head.php'); ?>
    </head>

    <body>

        <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/header.php'); ?>

    <main>
        <h1>
            Select Items for Order
        </h1>

        <form action="/Orders/orders.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="getImage" >
            <label>Select Product</label>
            <select>
               <option value="tee">Tee-Shirt</option>
               <option value="mug">Coffee Mug</option>
               <option value="prints">Prints</option>
            </select>
            <label>Select Color</label>
            <select>
               <option value="white">White</option>
               <option value="black">Black</option>
               <option value="red">Red</option>
               <option value="green">Green</option>
               <option value="yellow">Yellow</option>
               <option value="blue">Blue</option>
            </select>
            <label>Select Size</label>
            <select>
               <option value="small">Small</option>
               <option value="medium">Medium</option>
               <option value="large">Large</option>
               <option value="4_x_6">Volvo</option>
               <option value="8_x_10">Volvo</option>
               <option value="18_x_24">Volvo</option>
               <option value="5_x_7">Volvo</option>
            </select>
            <label>Select Style</label>
            <select>
               <option value="crew_neck">Crew Neck</option>
               <option value="v_neck">Vee Neck</option>
               <option value="canvas">Canvass Art Print</option>
               <option value="glossy">Glossy Photos</option>
               <option value="satin">Satin Photos</option>
            </select>
            
            <button type="submit"> Order this item </button>           
        </form>
        
    </main>


    <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/footer.php'); ?>


</body>
</html>
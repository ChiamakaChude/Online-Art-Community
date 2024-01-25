<!DPCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" href="../logo1.png">
    <script src="../js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="froala_editor_3.0.3/css/froala_editor.pkgd.min.css">
    <script type="text/javascript" src="froala_editor_3.0.3/js/froala_editor.pkgd.min.js"></script>
    <script src="../javascript/add-products.js"></script>
    <!-- Place your stylesheet here-->
    <link href="admin.css" rel="stylesheet">
                    
        <title>
            Admin Mode|Orders
        </title>
        
        
    </head>
    
    <body onload="<?php //sleep(3);?>">
        <?php include 'admin-nav.php'; ?>
        <br><br>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['pimage']['name']))
            {
                $image=$_FILES['pimage']['name'];
                $target_dir="../image_uploads";
                $target_file=basename($_FILES['pimage']['name']);
                //echo "<br><br><br><br><br>".$image;
                move_uploaded_file($_FILES['pimage']['tmp_name'],$target_dir."/".$target_file);
            }  
            
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['cimage']['name']))
            {
                $image=$_FILES['cimage']['name'];
                $target_dir="../image_uploads";
                $target_file=basename($_FILES['cimage']['name']);
                //echo "<br><br><br><br><br>".$image;
                move_uploaded_file($_FILES['cimage']['tmp_name'],$target_dir."/".$target_file);
            }  
        ?>
        <div class="container-fluid" id="side-contain">
            <h3>Info</h3>
            <p id="interaceinfo">This interface allows you to enter new products into the database. Each entry should be filled appropriately as it wll provide information for customers to see what they like about it and decide if they want to purchase it</p>
            
            <p id="name-desc" style="display:none;"><b>Product Name</b> <br>It’s not easy to name a product. Just as you learned in my previous post about how to name a brand (follow the link to read it if you missed it), you need to do your research, planning, and brainstorming first. My next post will cover all of the research aspects of brand and product naming. First, I’m going to share a variety of tips that brand and product naming experts use to help jumpstart creative thinking.

            When you need to name a product, not just any name will do. Your product name needs to fit within your broader brand name umbrella while telling its own unique story to consumers. It needs to be memorable, findable (particularly on search engines), unique, understandable, and relevant.</p>
            
            <p id="price-desc" style="display:none;"><b>Product Price</b> <br>No matter what type of product you sell, the price you charge your customers or clients will have a direct effect on the success of your business. Though pricing strategies can be complex, the basic rules of pricing are straightforward:

            All prices must cover costs and profits.
            The most effective way to lower prices is to lower costs.
            Review prices frequently to assure that they reflect the dynamics of cost, market demand, response to the competition, and profit objectives.
            Prices must be established to assure sales.</p>

            <p id="oprice-desc" style="display:none;"><b>Product Old Price</b> <br>When you need to name a product, not just any name will do. Your product name needs to fit within your broader brand name umbrella while telling its own unique story to consumers. It needs to be memorable, findable (particularly on search engines), unique, understandable, and relevant.</p>
            
            <p id="quantity-desc" style="display:none;"><b>Quantity</b> <br> Many manufacturers use cost-plus pricing. The key to being successful with this method is making sure that the "plus" figure not only covers all overhead but generates the percentage of profit you require as well. If your overhead figure is not accurate, you risk profits that are too low. The following sample calculation should help you grasp the concept of cost-plus pricing:

            Cost of materials	$50.00
            + Cost of labor	30.00
            + Overhead
            40.00
            = Total cost	$120.00
            + Desired profit (20% on sales)	30.00
            = Required sale price	$150.00</p>
            
            <p id="img-desc" style="display:none;"><b>Image</b> <br>Demand pricing is determined by the optimum combination of volume and profit. Products usually sold through different sources at different prices--retailers, discount chains, wholesalers, or direct mail marketers--are examples of goods whose price is determined by demand. A wholesaler might buy greater quantities than a retailer, which results in purchasing at a lower unit price. The wholesaler profits from a greater volume of sales of a product priced lower than that of the retailer. The retailer typically pays more per unit because he or she are unable to purchase, stock, and sell as great a quantity of product as a wholesaler does. This is why retailers charge higher prices to customers. Demand pricing is difficult to master because you must correctly calculate beforehand what price will generate the optimum relation of profit to volume.</p>
            
            <p id="animal-desc" style="display:none;"><b>Animal</b> <br>Competitive pricing is generally used when there's an established market price for a particular product or service. If all your competitors are charging $100 for a replacement windshield, for example, that's what you should charge. Competitive pricing is used most often within markets with commodity products, those that are difficult to differentiate from another. If there's a major market player, commonly referred to as the market leader, that company will often set the price that other, smaller companies within that same market will be compelled to follow.

            To use competitive pricing effectively, know the prices each competitor has established. Then figure out your optimum price and decide, based on direct comparison, whether you can defend the prices you've set. Should you wish to charge more than your competitors, be able to make a case for a higher price, such as providing a superior customer service or warranty policy. Before making a final commitment to your prices, make sure you know the level of price awareness within the market.</p>
            
            <p id="category-desc" style="display:none;"><b>Category</b> <br>Used by manufacturers, wholesalers, and retailers, a markup is calculated by adding a set amount to the cost of a product, which results in the price charged to the customer. For example, if the cost of the product is $100 and your selling price is $140, the markup would be $40. To find the percentage of markup on cost, divide the dollar amount of markup by the dollar amount of product cost:

            $40 ? $100 = 40%

            This pricing method often generates confusion--not to mention lost profits--among many first-time small-business owners because markup (expressed as a percentage of cost) is often confused with gross margin (expressed as a percentage of selling price). The next section discusses the difference in markup and margin in greater depth.</p>

            <p id="brand-desc" style="display:none;"><b>Brand</b> <br>Pricing Basics
            To price products, you need to get familiar with pricing structures, especially the difference between margin and markup. As mentioned, every product must be priced to cover its production or wholesale cost, freight charges, a proportionate share of overhead (fixed and variable operating expenses), and a reasonable profit. Factors such as high overhead (particularly when renting in prime mall or shopping center locations), unpredictable insurance rates, shrinkage (shoplifting, employee or other theft, shippers' mistakes), seasonality, shifts in wholesale or raw material, increases in product costs and freight expenses, and sales or discounts will all affect the final pricing.

            </p>
            
            <p id="desc" style="display:none;"><b>Product Description</b> <br>Fixed expenses. No matter what the volume of sales is, these costs must be met every month. Fixed expenses include rent or mortgage payments, depreciation on fixed assets (such as cars and office equipment), salaries and associated payroll costs, liability and other insurance, utilities, membership dues and subscriptions (which can sometimes be affected by sales volume), and legal and accounting costs. These expenses do not change, regardless of whether a company's revenue goes up or down.
            Variable expenses. Most so-called variable expenses are really semivariable expenses that fluctuate from month to month in relation to sales and other factors, such as promotional efforts, change of season, and variations in the prices of supplies and services. Fitting into this category are expenses for telephone, office supplies (the more business, the greater the use of these items), printing, packaging, mailing, advertising, and promotion. When estimating variable expenses, use an average figure based on an estimate of the yearly total.</p>
            <script>
                function pname()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="block";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function price()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="block";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function oldp()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="block";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function quan()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="block";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function img()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="block";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function animal()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="block";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function category()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="block";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="none";
                }
                function brand()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="block";
                    document.getElementById("desc").style.display="none";
                }
                function description()
                {
                    document.getElementById("interaceinfo").style.display="none";
                    document.getElementById("name-desc").style.display="none";
                    document.getElementById("price-desc").style.display="none";
                    document.getElementById("oprice-desc").style.display="none";
                    document.getElementById("quantity-desc").style.display="none";
                    document.getElementById("img-desc").style.display="none";
                    document.getElementById("animal-desc").style.display="none";
                    document.getElementById("category-desc").style.display="none";
                    document.getElementById("brand-desc").style.display="none";
                    document.getElementById("desc").style.display="block";
                }
            </script>
        </div>
        <div class="container" id="page-contain">
            <div class="row">
                <div class="col-6"><h3 style="padding-top:10px;">Add Products</h3></div>
                <div class="col-6" style="padding-top:10px;"><button data-toggle="popover" title="Help" data-content="This platform enables the admin to add new products to the database" class="btn btn-warning" style="float:right;">Help <i class="far fa-question-circle"></i></button></div>
                <script>
                $(document).ready(function(){
                  $('[data-toggle="popover"]').popover(); 
                });
                </script>
            </div><hr>
            <!--<div class="jumbotron">
                <p style="color:grey;"><i class="far fa-question-circle fa-2x"></i> This interface allows you to enter new products into the database. Each entry should be filled appropriately as it wll provide information for customers to see what they like about it and decide if they want to purchase it</p>
            </div>-->
            
            <div class="container" style="width:80%;">
                <br>
                <form method="post" id="product-form" enctype = "multipart/form-data">
                    <a onclick="pname()"><input  type="text" placeholder="Product Name" id="pname" class="form-control" name="pname" required></a><br>
                    <div class="form-row mb-4">
                        <div class="col">
                            <a onclick="price()"><input type="text" placeholder="Price" id="price" class="form-control" pattern="[0-9]{2,}" title="Entry must be a valid price of 2 or more digits" name="pprice" required></a>
                        </div>
                        <div class="col">
                            <a onclick="quan()"><input type="text" placeholder="Quantity" id="quantity" class="form-control" name="quantity" required></a>
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-10">
                            <a onclick="img()">
                        <input type="text" class="form-control" placeholder="Product Image" id="file-in" readonly required></a>
                        </div>
                        <div class="col-2">
                            <a onclick="img()"><button type="button" onclick="openwin()" class="btn btn-primary" id="open" style="width:100%;">Select</button></a>
                        </div>
                        <script>
                            /*function openwin()
                            {
                                var select=document.getElementById('file').click();
                            }
                            $(document).ready(function(){
                            $('#file').change(function(e){
                                var fileName = e.target.files[0].name;
                                //('The file "' + fileName +  '" has been selected.');
                                document.getElementById('file-in').value=fileName;
                            });
                        });*/
                            
                        </script>
                    </div>
                    <!--<a onclick="category()"><select class="form-control" id="category" name="category" required>
                                <option value="">Category</option>
                                <option value="breed">Fashion Design</option>
                                <option value="bowls">Bead Making</option>
                                <option value="cages">Catering Craft</option>
                                <option value="collars">Photography</option>
                                <option value="dryfood">Interior Decoration</option>
                                <option value="grains">Bag Making</option>
                                <option value="grooming">Shoe Making</option>
                            </select></a>-->
                    <br>
                    <div class="row">
                        <div class="col-9">
                            <a onclick="brand()">
                                <select class="form-control" id="category" name="brand" required>
                                    <option value="">Category</option>
                                    
                                </select></a>
                            </div>
                            <div class="col-3">
                                <a data-toggle="modal" data-target="#newbrand"><button type="button" class="btn btn-primary" style="width:100%;">New Category</button></a>
                            </div>
                        </div>
                        <br>
                    <a onclick="description()"><textarea rows="6" placeholder="Product Description" id="proddesc" name="description" class="form-control"></textarea></a><br>
                    <button type="submit" class="btn btn-success" style="margin: 0 auto; display:block;" name="submit">Add Product</button>
                </form>
                <form method="post" id="image-form" enctype = "multipart/form-data">
                    <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Product Image" id="file" name="pimage" style="display:none;">
                </form>
            </div>
            
            <div class="modal fade" id="newbrand" role="dialog">
                    <div class="modal-dialog">
                    <br>
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" id="cat-close" class="close" data-dismiss="modal">&times;</button>  
                        </div>
                    <div class="modal-title" style="text-align:center; font-size:20px; font-weight:bold;">Create Category</div>
                    <div class="modal-body">
                        <form method="post" id="new-category" enctype = "multipart/form-data">
                            
                            <input type="text" placeholder="Category Name" class="form-control" maxlength="30" id="cat-name" title="Entry must be a valid price of 2 or more digits" name="pprice" required><br>
                            <p id="cat-name_er" style="color:red"></p>
                        <div class="form-row mb-4">
                        <div class="col-10">
                            <a onclick="img()">
                        <input type="text" class="form-control" placeholder="Category Image" id="cat-file-in" readonly required></a>
                        </div>
                        <div class="col-2">
                            <a onclick="img()"><button type="button" onclick="openWin()" class="btn btn-primary" id="cat-open" style="width:100%;">Select</button></a>
                        </div>
                        <script>
                           /* function openWin()
                            {
                                var select=document.getElementById('cat-file').click();
                            }
                            $(document).ready(function(){
                            $('#cat-file').change(function(e){
                                var fileName = e.target.files[0].name;
                                ('The file "' + fileName +  '" has been selected.');
                                document.getElementById('cat-file-in').value=fileName;
                            });
                        });*/
                            
                        </script>
                    </div>
                            <textarea class="form-control" id="cat-desc" style="background-color:transparent;" name="nbrand" placeholder="Description"></textarea>

                            <div class="modal-footer" style="text-align:center;">
                            <button type="submit" name="create" class="btn btn-primary" style="margin:auto; display:block;">Create</button>
                            <button type="button"  data-dismiss="modal" class="btn btn-danger" style="margin:auto; display:block;">Cancel</button>
                            </div>
                        </form>
                       
                    </div>
                        </div>
                </div>
                     </div>
             <form method="post" id="catimage-form" enctype = "multipart/form-data">
                            <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="form-control" placeholder="Category Image" id="cat-file" name="cimage" style="display:none;">
                        </form>
                        <script>
                           /* function csubmit()
                            {
                                document.getElementById("catimage-form").submit();
                            }*/
                        </script>
        </div>
    </body>
</html>
<?php $__env->startSection('title', $details->name); ?>
<?php $__env->startPush('seo'); ?>
<meta name="app-url" content="<?php echo e(route('product', $details->slug)); ?>" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php echo e($details->meta_description); ?>" />
<meta name="keywords" content="<?php echo e($details->slug); ?>" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="<?php echo e($details->name); ?>" />
<meta name="twitter:title" content="<?php echo e($details->name); ?>" />
<meta name="twitter:description" content="<?php echo e($details->meta_description); ?>" />
<meta name="twitter:creator" content="gomobd.com" />
<meta property="og:url" content="<?php echo e(route('product', $details->slug)); ?>" />
<?php if($details->image): ?>
<meta name="twitter:image" content="<?php echo e(asset($details->image->image)); ?>" />
<?php endif; ?>
<!--product_size-->
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo e($details->name); ?>" />
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo e(route('product', $details->slug)); ?>" />
<?php if($details->image): ?>
<meta property="og:image" content="<?php echo e(asset($details->image->image)); ?>" />
<?php endif; ?>
<meta property="og:description" content="<?php echo e($details->meta_description); ?>" />
<meta property="og:site_name" content="<?php echo e($details->name); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/zoomsl.css')); ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<?php $__env->stopPush(); ?>



<style>

@media (max-width: 768px) {
    /* Main container adjustments */
    .product-container {
        flex-direction: column;
    }

    .product-gallery,
    .product-details {
        width: 100% !important;
        /*padding-right: 0;*/
        padding:14px;
    }
    /* .product-section{
        padding: 0 !important;
    } */

    /* Thumbnail adjustments */
    .thumbnail-container {
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Product details adjustments */
    .product-title {
        font-size: 20px;
        margin-top: 15px;
    }

    .current-price {
        font-size: 24px;
    }

    .old-price {
        font-size: 16px;
    }

    /* Quantity selector */
    .quantity-selector {
        justify-content: center;
    }

    /* Action buttons */
    .action-buttons {
        flex-direction: row;
        gap: 8px;
        margin: 15px 0;
    }

    .add-to-cart,
    .buy-now,
    .add_cart_btn,
    .order_now_btn {
        padding: 10px 15px;
        font-size: 14px;
        max-width: 200px;
    }

    /* Product tabs */
    .tab-header {
        display:flex;
        /*flex-direction: column;*/
    }

    .tab-btn {
        width: 100%;
        text-align: left;
    }

    /* Related products grid */
    .products-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    /* Form elements */
    .selector {
        flex-wrap: wrap;
    }

    .selector-item {
        margin: 5px;
    }
}

@media (max-width: 480px) {
    .color_inner{
        margin-left:16px;
    }

    .product-title{
        padding:12px;
    }

    .action-buttons{
        padding: 15px;
    }
    /* Further mobile adjustments */
    .breadcrumb {
        font-size: 12px;
    }

    .product-title {
        font-size: 18px;
    }

    .product-meta {
        flex-direction: column;
        align-items: flex-start;
    }

    .rating {
        margin-bottom: 10px;
    }

    .products-grid {
        grid-template-columns: 1fr;
    }

    .product-card-title {
        font-size: 14px;
    }

    .specifications-table th,
    .specifications-table td {
        padding: 8px;
        font-size: 14px;
    }

    /* Quantity input */
    .quantity-selector input {
        width: 40px;
    }

    /* Tabs content */
    .tab-content {
        padding: 15px;
    }

    .action-buttons {
        gap: 6px;
    }

    .add-to-cart, .buy-now, .add_cart_btn, .order_now_btn {
        padding: 8px 12px;
        font-size: 13px;
        max-width: 160px;
    }
}

/* Mobile-specific additions */
@media (max-width: 360px) {
    .thumbnail {
        width: 50px;
        height: 50px;
    }

    .discount-badge {
        font-size: 12px;
    }

    .action-buttons button {
        padding: 10px 15px;
        font-size: 14px;
    }
}

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #ff6700;
        }

        .search-bar {
            flex-grow: 1;
            margin: 0 30px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: #ff6700;
            color: white;
            border: none;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            cursor: pointer;
        }

        .cart-icon {
            position: relative;
            font-size: 20px;
        }

        .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #ff6700;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* Navigation */
        nav {
            background-color: #333;
        }

        .nav-menu {
            display: flex;
        }

        .nav-menu li {
            position: relative;
        }

        .nav-menu li a {
            color: white;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s;
        }

        .nav-menu li a:hover {
            background-color: #ff6700;
        }

        /* Breadcrumb */
        .breadcrumb {
            padding: 15px 0;
            font-size: 14px;
        }

        .breadcrumb a {
            color: #666;
        }

        .breadcrumb a:hover {
            color: #ff6700;
        }

        .breadcrumb span {
            margin: 0 5px;
            color: #999;
        }

        /* Product Section */
        .product-section {
            background-color: white;
            padding: 31px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
        }

        .product-gallery {
            width: 45%;
            padding-right: 30px;
        }

        .main-image {
            border: 1px solid #eee;
            margin-bottom: 15px;
            text-align: center;
            padding: 20px;
        }

        .main-image img {
            max-width: 100%;
            height: auto;
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            padding-left: 15px;
        }

        .thumbnail {
            border: 1px solid #eee;
            padding: 5px;
            cursor: pointer;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .thumbnail img {
            max-width: 100%;
            max-height: 100%;
        }

        .thumbnail.active {
            border-color: #ff6700;
        }

        .product-details {
            width: 55%;
        }

        .product-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-meta {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
            color: #666;
        }

        .rating {
            color: #ffc107;
            margin-right: 15px;
        }

        .availability {
            color: #4caf50;
            font-weight: 500;
        }

        .price-container {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .current-price {
            font-size: 28px;
            font-weight: 700;
            color: #ff6700;
        }

        .old-price {
            font-size: 18px;
            color: #999;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .discount-badge {
            background-color: #ff6700;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 14px;
            margin-left: 10px;
        }

        .product-description {
            margin: 20px 0;
            line-height: 1.7;
        }

        .features-list {
            margin: 15px 0 25px;
        }

        .features-list li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }

        .features-list li:before {
            content: "•";
            color: #ff6700;
            position: absolute;
            left: 0;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .quantity-selector button {
            width: 30px;
            height: 30px;
            background-color: #f0f0f0;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        .quantity-selector input {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 1px solid #ddd;
            margin: 0 5px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            margin: 20px 0;
        }

        .add-to-cart, .buy-now, .add_cart_btn, .order_now_btn {
            padding: 12px 20px;
            font-weight: 500;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
            flex: 1;
            text-align: center;
            font-size: 15px;
            background-color: #00A3E0;
            color: white;
            max-width: 250px;
            line-height:1px;
        }

        .add-to-cart:hover, .add_cart_btn:hover,
        .buy-now:hover, .order_now_btn:hover {
            opacity: 0.9;
        }

        .wishlist-compare {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }

        .wishlist-compare a {
            color: #666;
            font-size: 14px;
        }

        .wishlist-compare a:hover {
            color: #ff6700;
        }

        .wishlist-compare i {
            margin-right: 5px;
        }

        .product-meta-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
            color: #666;
        }

        .meta-item {
            margin-bottom: 8px;
        }

        .meta-label {
            font-weight: 600;
            display: inline-block;
            width: 120px;
        }

        /* Product Tabs */
        .product-tabs {
            margin: 30px 0;
        }

        .tab-header {
            display: flex;
            border-bottom: 1px solid #ddd;
        }

        .tab-btn {
            padding: 12px 25px;
            background-color: #f5f5f5;
            border: none;
            cursor: pointer;
            font-weight: 600;
            color: #666;
            transition: all 0.3s;
        }

        .tab-btn.active {
            background-color: white;
            color: #ff6700;
            border-bottom: 2px solid #ff6700;
        }

        .tab-content {
            background-color: white;
            padding: 20px;
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .specifications-table {
            width: 100%;
            border-collapse: collapse;
        }

        .specifications-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .specifications-table th,
        .specifications-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .specifications-table th {
            width: 30%;
            font-weight: 600;
            color: #333;
        }

        /* Related Products */
        .related-products {
            padding: 20px;
            margin-top: 30px;
        }

        .section-title {
            text-align: left;
            margin-bottom: 25px;
            font-size: 20px;
            color: #333;
            font-weight: 500;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 0 15px;
        }

        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 991px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 575px) {
            .products-grid {
                grid-template-columns: repeat(1, 1fr);
                /* gap: 10px; */
            }
        }

        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            padding: 10px;
        }

        .product-card:hover {
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .product-card-img {
            width: 100%;
            height: 200px;
            overflow: hidden;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-card-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .product-card-body {
            padding: 0 10px;
        }

        .product-card-title {
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.4;
        }

        .product-card-title a {
            color: #333;
            text-decoration: none;
        }

        .product-card-price {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 8px;
        }

        .current-price {
            font-size: 16px;
            font-weight: 600;
            color: #FF4747;
        }

        .old-price {
            font-size: 14px;
            color: #999;
            text-decoration: line-through;
        }

        .discount-badge {
            background: #FF4747;
            color: white;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
        }

        .rating {
            color: #FFC107;
            font-size: 12px;
            margin-top: 5px;
        }



</style>



<?php $__env->startSection('content'); ?>



 <!-- Main Content -->
    <main class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <span>/</span>

            <a href="<?php echo e(url('/category/' . $details->category->slug)); ?>"><?php echo e($details->category->name); ?></a>
            <span>/</span>
            <?php if($details->subcategory): ?>
            <a href="#"><?php echo e($details->subcategory ? $details->subcategory->subcategoryName : ''); ?></a>
            <span>/</span>
            <?php endif; ?> <?php if($details->childcategory): ?>
            <a href="#"><?php echo e($details->childcategory->childcategoryName); ?></a>
            <?php endif; ?>
        </div>

        <!-- Product Section -->
        <section class="product-section">
            <div class="product-container">
                <div class="product-gallery">
                    <?php if(count($details->images) > 0): ?>
                    <div class="main-image">
                           <img id="mainImage" src="<?php echo e(asset($details->images[0]->image)); ?>" alt="<?php echo e($details->name); ?>" class="block__pic">
                    </div>
                    <?php endif; ?>
                    <div class="thumbnail-container">
                        <?php if(count($details->images) > 0): ?>
                        <?php $__currentLoopData = $details->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="thumbnail <?php if($key == 0): ?> active <?php endif; ?>"
                             onclick="changeImage('<?php echo e(asset($image->image)); ?>')">
                          <img src="<?php echo e(asset($image->image)); ?>" alt="Thumbnail <?php echo e($key+1); ?>">
                       </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <?php endif; ?>




                    </div>
                </div>
                <div class="product-details">
                    <h1 class="product-title"><?php echo e($details->name); ?></h1>
                    <div class="product-meta">
                        <div class="rating">
                            <?php $averageRating = $reviews->avg('ratting') ?>
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($i <= floor($averageRating)): ?>
                                    <i class="fas fa-star"></i>
                                <?php elseif($i - 0.5 <= $averageRating): ?>
                                    <i class="fas fa-star-half-alt"></i>
                                <?php else: ?>
                                    <i class="far fa-star"></i>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <span>(<?php echo e($reviews->count()); ?> reviews)</span>
                        </div>
                        <div class="availability">
                            <?php if($details->stoke > 0): ?>
                             <i class="fas fa-times-circle text-danger"></i> Out of Stock
                             <?php else: ?>
                            <i class="fas fa-check-circle"></i> In Stock
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="price-container">
                       <span class="current-price">৳<?php echo e($details->new_price); ?></span>
                        <?php if($details->old_price): ?>
                        <span class="old-price">৳<?php echo e($details->old_price); ?></span>
                        <span class="discount-badge">
                            <?php $discount = ((($details->old_price - $details->new_price) * 100) / $details->old_price) ?>
                             Save<?php echo e(number_format($discount, 0)); ?>%

                        </span>
                        <?php endif; ?>
                    </div>

                         <div class="product-description">
                        <p><?php echo $details->note; ?></p>
                    </div>


                    <form action="<?php echo e(route('cart.store')); ?>" method="POST" name="formName" onsubmit="return sendSuccess()">
                            <?php echo csrf_field(); ?>
                         <input type="hidden" name="id" value="<?php echo e($details->id); ?>" />

                    <?php if($productcolors->count() > 0): ?>

                     <!-- for check if size available or not  -->
                    <input type="hidden" name="has_color" value="<?php echo e($productcolors->count() > 0 ? 1 : 0); ?>">

                    <div class="pro-color" style="width: 100%;">
                    <div class="color_inner">
                        <p>Color -</p>
                        <div class="size-container">
                            <div class="selector">
                                <?php $__currentLoopData = $productcolors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $procolor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="selector-item">
                                        <input type="radio"
                                            id="fc-option<?php echo e($procolor->id); ?>"
                                            value="<?php echo e($procolor->color ? $procolor->color->colorName : ''); ?>"
                                            name="product_color"
                                            class="selector-item_radio emptyalert"
                                             />
                                        <label for="fc-option<?php echo e($procolor->id); ?>"
                                            style="background-color: <?php echo e($procolor->color ? $procolor->color->color : ''); ?>"
                                            class="selector-item_label">
                                            <span>
                                                <img src="<?php echo e(asset('public/frontEnd/images')); ?>/check-icon.svg"
                                                    alt="Checked Icon" />
                                            </span>
                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

               <!-- show error message for color -->
                    <?php if($productcolors->count() > 0 && $errors->has('product_color')): ?>
                    <div style="margin-top: 10px;">
                        <span style="color: red; font-size: 14px;">
                            <?php echo e($errors->first('product_color')); ?>

                        </span>
                    </div>
                <?php endif; ?>

                </div>

                 <?php endif; ?> <?php if($productsizes->count() > 0): ?>

                      <!-- for check if size available or not  -->
                 <input type="hidden" name="has_size" value="<?php echo e($productsizes->count() > 0 ? 1 : 0); ?>">

                    <div class="pro-size" style="width: 100%;">
                        <div class="size_inner">
                            <p>Size - <span class="attibute-name"></span></p>
                            <div class="size-container">
                                <div class="selector">
                                    <?php $__currentLoopData = $productsizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prosize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="selector-item">
                                            <input type="radio"
                                                id="f-option<?php echo e($prosize->id); ?>"
                                    value="<?php echo e($prosize->size ? $prosize->size->sizeName : ''); ?>"
                                    name="product_size"
                                    class="selector-item_radio emptyalert"
                                     />
                                <label
                                    for="f-option<?php echo e($prosize->id); ?>"
                                    class="selector-item_label"><?php echo e($prosize->size ? $prosize->size->sizeName : ''); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

         <!-- show error message for product size  -->
        <?php if($productsizes->count() > 0 && $errors->has('product_size')): ?>
            <div style="margin-top: 10px;">
                <span style="color: red; font-size: 14px;">
                    <?php echo e($errors->first('product_size')); ?>

                </span>
            </div>
        <?php endif; ?>

             <?php if($details->pro_unit): ?>
            <div class="pro_unig">
                            <label>Unit: <?php echo e($details->pro_unit); ?></label>
                            <input type="hidden" name="pro_unit"
                                value="<?php echo e($details->pro_unit); ?>" />
                        </div>
                    <?php endif; ?>
                    <div class="quantity-selector">
                        <button onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" value="1" min="1" name="qty">
                        <button onclick="increaseQuantity()">+</button>
                    </div>
                    <div class="action-buttons">

                              <input type="submit" class="btn px-4 add_cart_btn"
                                                                    onclick="return sendSuccess();" name="add_cart" required=""
                                                                    value="Add To Cart" />

                        <!--<button class="buy-now" onclick="buyNow()"><i class="fas fa-bolt"></i> Buy Now</button>-->

                        <input type="submit"
                                                                    class="buy-now order_now_btn order_now_btn_m"
                                                                    onclick="return sendSuccess();" name="order_now" required=""
                                                                    value="Buy Now" />
                    </div>

                </form>
                    <!--<div class="wishlist-compare">-->
                    <!--    <a href="#"><i class="far fa-heart"></i> Add to Wishlist</a>-->
                    <!--    <a href="#"><i class="fas fa-exchange-alt"></i> Compare</a>-->
                    <!--</div>-->
                    <!--<div class="product-meta-info">-->
                    <!--    <div class="meta-item">-->
                    <!--        <span class="meta-label">SKU:</span> <?php echo e($details->product_code); ?>-->
                    <!--    </div>-->
                    <!--    <div class="meta-item">-->
                    <!--        <span class="meta-label">Category:</span> <?php echo e($details->category->name ?? 'N/A'); ?>-->
                    <!--    </div>-->
                    <!--    <div class="meta-item">-->
                    <!--        <span class="meta-label">Brand:</span> <?php echo e($details->brand->name ?? 'N/A'); ?>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </section>

        <!-- Product Tabs -->
        <section class="product-tabs">
            <div class="tab-header">
                <button class="tab-btn active" onclick="openTab('description')">Description</button>
                <button class="tab-btn" onclick="openTab('specifications')">Specifications</button>
                <button class="tab-btn" onclick="openTab('reviews')">Reviews</button>
            </div>
            <div id="description" class="tab-content active">
                <h3>Product Description</h3>
                  <?php echo $details->description; ?>

            </div>
            <div id="specifications" class="tab-content">
                <h3>Technical Specifications</h3>
                <table class="specifications-table">
            <!-- Add your product specs here -->
            <tr>
                <th>Product Code</th>
                <td><?php echo e($details->product_code); ?></td>
            </tr>
            <tr>
                <th>Brand</th>
                <td><?php echo e($details->brand ? $details->brand->name : 'N/A'); ?></td>
            </tr>
            <!-- Add more specs as needed -->
        </table>
            </div>
            <div id="reviews" class="tab-content">
                <h3>Customer Reviews</h3>
                  <div class="action">
                    <div>
                        <button type="button" class="details-action-btn question-btn btn-overlay"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Write a review
                        </button>
                    </div>
                </div>
                 <?php if($reviews->count() > 0): ?>
                                    <div class="customer-review">
                                        <div class="row">
                                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-sm-12 col-12">
                                                    <div class="review-card">
                                                        <p class="reviewer_name"><i data-feather="message-square"></i>
                                                            <?php echo e($review->name); ?></p>
                                                        <p class="review_data"><?php echo e($review->created_at->format('d-m-Y')); ?></p>
                                                        <p class="review_star"><?php echo str_repeat('<i class="fa-solid fa-star"></i>', $review->ratting); ?></p>
                                                        <p class="review_content"><?php echo e($review->review); ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="empty-content">
                                        <i class="fa fa-clipboard-list"></i>
                                        <p class="empty-text">This product has no reviews yet. Be the first one to write a review.</p>
                                    </div>
                                <?php endif; ?>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Your review</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="insert-review">
                                                    <?php if(Auth::guard('customer')->user()): ?>
                                                        <form action="<?php echo e(route('customer.review')); ?>" id="review-form"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="product_id" value="<?php echo e($details->id); ?>">
                                                            <div class="fz-12 mb-2">
                                                                <div class="rating">
                                                                    <label title="Excelent">
                                                                        ☆
                                                                        <input required type="radio" name="ratting"
                                                                            value="5" />
                                                                    </label>
                                                                    <label title="Best">
                                                                        ☆
                                                                        <input required type="radio" name="ratting"
                                                                            value="4" />
                                                                    </label>
                                                                    <label title="Better">
                                                                        ☆
                                                                        <input required type="radio" name="ratting"
                                                                            value="3" />
                                                                    </label>
                                                                    <label title="Very Good">
                                                                        ☆
                                                                        <input required type="radio" name="ratting"
                                                                            value="2" />
                                                                    </label>
                                                                    <label title="Good">
                                                                        ☆
                                                                        <input required type="radio" name="ratting"
                                                                            value="1" />
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                <textarea required class="form-control radius-lg" name="review" id="message-text"></textarea>
                                                                <span id="validation-message" style="color: red;"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="details-review-button" type="submit">Submit
                                                                    Review</button>
                                                            </div>

                                                        </form>
                                                    <?php else: ?>
                                                        <a class="customer-login-redirect" href="<?php echo e(route('customer.login')); ?>">Login
                                                            to Post
                                                            Your Review</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </div>
        </section>

          <section class="related-products">
            <h2 class="section-title">Related Products</h2>
            <div class="products-grid">
                <?php if(count($relatedProducts) > 0): ?>
                    <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <div class="product-card-img">
                        <?php if(count($value->images)): ?>
                        <img src="<?php echo e(asset($value->images[0]->image)); ?>" alt="<?php echo e($value->name); ?>">
                        <?php endif; ?>
                    </div>


                    <div class="product-card-body">
                     <h3 class="product-card-title"> <a href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e($value->name); ?></a> </h3>
                        <div class="product-card-price">
                             <span class="current-price">৳<?php echo e($value->new_price); ?></span>
                        <?php if($value->old_price): ?>
                        <span class="old-price">৳<?php echo e($value->old_price); ?></span>
                        <span class="discount-badge">
                            <?php $discount = ((($value->old_price - $value->new_price) * 100) / $value->old_price) ?>
                            Save <?php echo e(number_format($discount, 0)); ?>%
                        </span>
                        <?php endif; ?>
                        </div>

                         <div class="rating">
                            <?php $averageRating = $reviews->avg('ratting') ?>
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($i <= floor($averageRating)): ?>
                                    <i class="fas fa-star"></i>
                                <?php elseif($i - 0.5 <= $averageRating): ?>
                                    <i class="fas fa-star-half-alt"></i>
                                <?php else: ?>
                                    <i class="far fa-star"></i>
                                <?php endif; ?>
                            <?php endfor; ?>

                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </section>
    </main>



<?php $__env->stopSection(); ?> <?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/frontEnd/js/zoomsl.min.js')); ?>"></script>


<script type="text/javascript">
    $(".block__pic").imagezoomsl({
        zoomrange: [3, 3]
    });
</script>
<script>
    $(document).ready(function() {
        $(".details_slider").owlCarousel({
            margin: 15,
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
        });
        $(".indicator-item").on("click", function() {
            var slideIndex = $(this).data("id");
            $(".details_slider").trigger("to.owl.carousel", slideIndex);
        });
    });
</script>
<!--Data Layer Start-->
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        ecommerce: null
    });
    dataLayer.push({
        event: "view_item",
        ecommerce: {
            items: [{
                item_name: "<?php echo e($details->name); ?>",
                item_id: "<?php echo e($details->id); ?>",
                price: "<?php echo e($details->new_price); ?>",
                item_brand: "<?php echo e($details->brand?$details->brand->name:''); ?>",
                item_category: "<?php echo e($details->category->name); ?>",
                item_variant: "<?php echo e($details->pro_unit); ?>",
                currency: "BDT",
                quantity: <?php echo e($details->stock ?? 0); ?>

            }],
            impression: [
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    {
                        item_name: "<?php echo e($value->name); ?>",
                        item_id: "<?php echo e($value->id); ?>",
                        price: "<?php echo e($value->new_price); ?>",
                        item_brand: "<?php echo e($details->brand?$details->brand->name:''); ?>",
                        item_category: "<?php echo e($value->category ? $value->category->name : ''); ?>",
                        item_variant: "<?php echo e($value->pro_unit); ?>",
                        currency: "BDT",
                        quantity: <?php echo e($value->stock ?? 0); ?>

                    },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_to_cart').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            item_id: "<?php echo e($details->id); ?>",
                            item_name: "<?php echo e($details->name); ?>",
                            price: "<?php echo e($details->new_price); ?>",
                            currency: "BDT",
                            quantity: <?php echo e($cartInfo->qty ?? 0); ?>

                        },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#order_now').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            item_id: "<?php echo e($details->id); ?>",
                            item_name: "<?php echo e($details->name); ?>",
                            price: "<?php echo e($details->new_price); ?>",
                            currency: "BDT",
                            quantity: <?php echo e($cartInfo->qty ?? 0); ?>

                        },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            });
        });
    });
</script>

<!-- Data Layer End-->
<script>
    $(document).ready(function() {
        $(".related_slider").owlCarousel({
            margin: 10,
            items: 6,
            loop: true,
            dots: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: true,
                },
            },
        });
        // $('.owl-nav').remove();
    });
</script>
<script>
    $(document).ready(function() {
        $(".minus").click(function() {
            var $input = $(this).parent().find("input");
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $(".plus").click(function() {
            var $input = $(this).parent().find("input");
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">




<!--<script>-->
<!--function sendSuccess() {-->
  <!--// Get form and its elements-->
<!--  const form = document.forms["formName"];-->
<!--  if (!form) {-->
<!--    console.error("Form not found");-->
<!--    return false;-->
<!--  }-->

<!--  const size = form.elements["product_size"].value.trim();-->
<!--  const color = form.elements["product_color"].value.trim();-->

  <!--// Clear previous toastr messages-->
<!--  toastr.clear();-->

  <!--// Validate size-->
<!--  if (!size) {-->
<!--    toastr.warning("Please select a size first");-->
<!--    form.elements["product_size"].focus();-->
<!--    return false;-->
<!--  }-->

  <!--// Validate color-->
<!--  if (!color) {-->
<!--    toastr.error("Please select a color");-->
<!--    form.elements["product_color"].focus();-->
<!--    return false;-->
<!--  }-->

  <!--// All validations passed-->
<!--  return true;-->
<!--}-->
<!--</script>-->


<script>
    function sendSuccess() {
        const form = document.forms["formName"];

        // const color = form["product_color"].value.trim();
        // const size = form["product_size"].value.trim();


        // if (!color) {
        //     toastr.warning("Please select any color");
        //     return false;
        // }

        // if (!size) {
        //     toastr.error("Please select any size");
        //     return false;
        // }

        // If everything is valid, continue with the form submission or next steps
        return true;
    }
</script>

 <script>
        function sendSuccess() {
            // color validation
            // color = document.forms["formName"]["product_color"].value;
            // if (color != "") {
            //     // access
            // } else {
            //     toastr.warning("Please select any color");
            //     return false;
            // }
            // size = document.forms["formName"]["product_size"].value;
            // if (size != "") {
            //     // access
            // } else {
            //     toastr.error("Please select any size");
            //     return false;
            // }
        }
    </script>



<script>
    $(document).ready(function() {
        $(".rating label").click(function() {
            $(".rating label").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".thumb_slider").owlCarousel({
            margin: 15,
            items: 4,
            loop: true,
            dots: false,
            nav: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
        });
    });
</script>



<script>
        // Change main product image when thumbnail is clicked
        function changeImage(src) {
            document.getElementById('mainImage').src = src;

            // Remove active class from all thumbnails
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumb => {
                thumb.classList.remove('active');
            });

            // Add active class to clicked thumbnail
            event.currentTarget.classList.add('active');
        }

        // Quantity selector functions
        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        }

        // Tab functionality
        function openTab(tabName) {
            // Hide all tab contents
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
            }

            // Remove active class from all tab buttons
            const tabButtons = document.getElementsByClassName('tab-btn');
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active');
            }

            // Show the current tab and add active class to the button
            document.getElementById(tabName).classList.add('active');
            event.currentTarget.classList.add('active');
        }
        </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ethisXampp\htdocs\Omit\alauegym_gadget\resources\views/frontEnd/layouts/pages/details.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <Style>
            .card-group{
            grid: 25% 25% 25% 25%;
            display: flex;
            gap: 10px;
            }

            
            #phone_img img {
            width: 300px;
            height: 260px;
        
            }
            .star {
            color: orange;
            }
            .title{
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            color:Black;
            font-size: 34px;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,5,5,1) 0%, rgba(98,0,255,1) 100%);
            border-radius: 50px;
            }
            #phone_price{
            color: red;
            }
            #plus_button{
            border-radius: 100px;
            }
    </Style>
</head>
<body>
    <?php 
    $Products = 
    array (
    'Sản phẩm nổi bật' => array(
        array(
            'img' => 'https://didongviet.vn/pub/media/catalog/product//i/p/iphone-14-pro-max-256gb-ma-vang-didongviet.jpg',
            'name' => 'iPhone 14 Pro Max 256GB Mạ Vàng',
            'price' => '1131.990.000 ₫',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://haidangmobile.vn/wp-content/uploads/2022/09/iphone-14-promax-128gb-newfullbox.jpg',
            'name' => 'Oppo Reno8',
            'price' => '4.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://img.websosanh.vn/v10/users/review/images/zlwkvrkwbaa49/iphone-14-pro-mau-hong.jpg?compress=85',
            'name' => 'Oppo Reno8',
            'price' => '8.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
        ),

        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '2.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
             ),

            ),


    'Sản phẩm mới nhất' => array(
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-tim-thumb-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '1.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
           ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/245545/iPhone-14-plus-thumb-den-600x600.jpg',
            'name' => 'Iphone 13 ProMax',
            'price' => '30.300.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '1.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/289702/iphone-14-pro-max-bac-thumb-600x600.jpg',
            'name' => ' iPhone 14 Pro 256GB',
            'price' => '14.900.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),

        ));
?>
<div id="container">
    <?php 

    foreach ($Products  as $key => $value) { ?>
        <div class="title"> 
            <?php echo $key ?>
    </div>
        <div class="card-group">

                <?php
                sort($Products );
                foreach ( $value as $k => $v ) {
                    ?>
                    <div class="card" id="card-item">
                    <div id="phone_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                    <div class="card-body">
                        <div id="phone_name" class="card-title"><?php echo $v['name'] ?> </div>
                        <div id="phone_price" ><?php echo $v['price'] ?></div>
                        <div id="phone_feedback">
                            <?php 
                                $quatity_star= $v['feedback']['quatity_star'];
                                for ($i=0; $i< $quatity_star; $i++) {
                                    echo '<span class="star"><i class="fa-sharp fa-solid fa-star"></i></span>';};

                            echo '<span>  ' .$v['feedback']['quatity_feedback']. '</span>';
                            ?>
                        </div>
                        <div id="plus_button"><button>+</button></div>
                    </div>
                    </div>
            <?php }
                ?>

        </div>
    <?php } ?>
</div>
</body>
</html>
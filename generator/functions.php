<?php
error_reporting(E_ERROR);

function MakeAmount(){
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/amount.txt"));
    if($_GET['amount'] == ''){
        $result = '<option selected="selected" value="">Объем</option>';
    } else {
        $result = '<option value="">Объем</option>';
    }
    foreach ($array as $k => $v) {
        if($v <> ''){
            if($_GET['amount'] == $k){
                $result .= '<option value="'.$k.'" selected="selected">'.$v.' мл.</option>';
            } else {
                $result .= '<option value="'.$k.'">'.$v.' мл.</option>';
            }
        }
    }
    return $result;
}

function AddActive($page, $now){
    if($page == $now){
        return 'active';
    } else {
        return false;
    }
}

function MakeCompany(){
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
    if($_GET['manufacturer'] == ''){
        $result = '<option selected="selected" value="">Производитель</option>';
    } else {
        $result = '<option value="">Производитель</option>';
    }
    foreach ($array as $k => $v) {
        if($v <> ''){
            if($_GET['manufacturer'] == $k){
                $result .= '<option value="'.$k.'" selected="selected">'.$v.'</option>';
            } else {
                $result .= '<option value="'.$k.'">'.$v.'</option>';
            }
        }
    }
    return $result;
}

function MakeProduct($from, $category, $max){
    if(!isset($from) || $from == ''){
        $from = 0;
    }
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
    $company = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
    if($category <> ''){
        $array = FindInArray($category, $array, 'category');
    }
    if($_GET['price'] <> ''){
        $array = FindInArray($_GET['price'], $array, 'price');
    }
    if($_GET['manufacturer'] <> ''){
        $array = FindInArray($_GET['manufacturer'], $array, 'manufacturer');
    }
    if($_GET['amount'] <> ''){
        $array = FindInArray($_GET['amount'], $array, 'amount');
    }
    $result = '';
    $catch = 0;
    foreach ($array as $i => $v) {
        if($i >= $from && $catch < $max){
            if($array[$i]['image'] <> ''){
                $result .= (include($_SERVER['DOCUMENT_ROOT'] . "/templates/elements/template_product.php"));
                $catch++;
            }
        }
    }

    return $result;
}

function FindInArray($searchword, $array, $action){
    $matches = array();
    foreach ($array as $k => $v) {
        switch($action){
            case 'category': if ($array[$k]['category'] == $searchword) {
                $matches[$k] = $array[$k];
            }; break;
            case 'price': if ($array[$k]['price_now'] <= $searchword) {
                $matches[$k] = $array[$k];
            }; break;
            case 'amount': if ($array[$k]['amount'] == $searchword) {
                $matches[$k] = $array[$k];
            }; break;
            case 'manufacturer': if ($array[$k]['company'] == $searchword) {
                $matches[$k] = $array[$k];
            }; break;
            case 'news': if ($array[$k]['description'] == $searchword) {
                $matches = $k;
            }; break;
        }
    }
    return $matches;
}

function FindInOneArray($searchword, $array){
    $matches = 0;
    foreach ($array as $k => $v) {
        if ($array[$k] == $searchword) {
            $matches = $k;
        }
    }
    return $matches;
}

function LoadPicture($picture){
    $image = '';
    if(isset($picture) && $picture <> ''){
        $allowedExts = array("jpg", 'JPG', 'PNG', "jpeg", "gif", "png");
        $extension = end(explode(".", $picture["name"]));
        if ((($picture["type"] == "image/gif") || ($picture["type"] == "image/jpeg") || ($picture["type"] == "image/png") || ($picture["type"] == "image/pjpeg")) && ($picture["size"] < 10000000) && in_array($extension, $allowedExts)) {
            if ($picture["error"] > 0) {
                echo "Return Code: " . $picture["error"] . "<br>";
            } else {
                switch($picture["type"]){
                    case "image/jpeg": $type = "jpg"; break;
                    case "image/png": $type = "png"; break;
                    case "image/pjpeg": $type = "jpg"; break;
                    default: $type = "jpg"; break;
                }

                $name = date("YmdHis");
                $image = 'FRAGRANTA'.$name.'.'.$type;

                move_uploaded_file($picture["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/images/" . $image);
            }
            return "/images/" . $image;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function ChangeCategory($category, $test){
    if($category == $test){
        return 'selected="selected"';
    } else {
        return false;
    }
}

function StartPrice($price){
    if(isset($price) && $price <> ''){
        return $price;
    } else {
        return 10000;
    }
}

function AddNextPrev($from, $category, $max){
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
    if($category <> ''){
        $array = FindInArray($category, $array, 'category');
    }
    if($_GET['price'] <> ''){
        $array = FindInArray($_GET['price'], $array, 'price');
    }
    if($_GET['manufacturer'] <> ''){
        $array = FindInArray($_GET['manufacturer'], $array, 'manufacturer');
    }
    if($_GET['amount'] <> ''){
        $array = FindInArray($_GET['amount'], $array, 'amount');
    }
    if(!isset($from) || $from == ''){
        $from = 0;
    }
    $catch = 0;
    $next = '<a class="nonactive">След.</a>';
    $prev = '<a class="nonactive">Пред.</a>';
    foreach ($array as $i => $v) {
        if($i >= $from && $catch < ($max+1)){
            if($array[$i]['image'] <> ''){
                $catch++;
                if($catch == $max){
                    if($from <> ''){
                        $next = '<a href="?f='.$i.'">След.</a>';
                    } else {
                        $next = '<a href="?f='.$i.'">След.</a>';
                    }
                }
            }
        }
    }

    if($from <> 0 && $from <> ''){
        $prev = '<a href="" onclick="javascript:history.back(); return false;">Пред.</a>';
    }

    return $prev.' <span>/</span> '.$next;
}

function get_product($i){
    if(isset($i)){
        if($i <> ''){
            $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
            if($array[$i]['name'] <> ''){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function MakeProductCart($shop){
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
    $company = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/company.txt"));
    $result = '';

    foreach ($shop as $v => $i) {
        if($array[$i]['image'] <> ''){
            $result .= (include($_SERVER['DOCUMENT_ROOT'] . "/templates/elements/template_product_cart.php"));
        }
    }

    return $result;
}

function ProductPriceAmount($shop){
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
    $result = 0;
    foreach ($shop as $v => $i) {
        $result += (int)$array[$i]['price_now'];
    }
    return $result;
}

function EditProduct($id){
    
    if($_SESSION['admin_online'] == 1){
        $result = '<a class="product__shopcart" href="/admin/edit_product.php?i='.$id.'"><i class="sgicon sgicon-Edit"></i></a>';
    } else {
        $result = '';
    }
    return $result;
}

function LoginTest($searchword, $array){
    $matches = 0;
    foreach ($array as $k => $v) {
        if ($array[$k]['login'] == $searchword) {
            $matches = $k;
        }
    }
    return $matches;
}

function AddComment($searchword){
    $matches = '';
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/comments.txt"));
    foreach ($array as $k => $v) {
        if ($array[$k]['id'] == $searchword) {
            $matches .= (include($_SERVER['DOCUMENT_ROOT'] . "/templates/elements/template_comment.php"));
        }
    }
    return $matches;
}

function MakeNews($from, $max){
    if(!isset($from) || $from == ''){
        $from = 0;
    }
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));



    $result = '';
    $catch = 0;
    foreach ($array as $i => $v) {
        if($i >= $from && $catch < $max){
            if($array[$i]['image'] <> ''){
                $result .= (include($_SERVER['DOCUMENT_ROOT'] . "/templates/elements/template_news_item.php"));
                $catch++;
            }
        }
    }

    return $result;
}

function AddNextPrevNews($from, $max){
    $array = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/news.txt"));
	
	if(!isset($from) || $from == ''){
        $from = 0;
    }
    $catch = 0;
    $next = '<a class="nonactive">След.</a>';
    $prev = '<a class="nonactive">Пред.</a>';
    foreach ($array as $i => $v) {
        if($i > $from && $catch < ($max+1)){
            if($array[$i]['image'] <> ''){
                $catch++;
                if($catch == $max){
                    if($from <> ''){
                        $next = '<a href="?f='.$i.'">След.</a>';
                    } else {
                        $next = '<a href="?f='.$i.'">След.</a>';
                    }
                }
            }
        }
    }

    if($from <> 0 && $from <> ''){
        $prev = '<a href="" onclick="javascript:history.back(); return false;">Пред.</a>';
    }

    return $prev.' <span>/</span> '.$next;
}

function AddNews($online){
    if($online == 1){
        return '<a class="product__shopcart" href="/admin/addnews">Добавить новую новость</a>';
    } else {
        return false;
    }
}

?>

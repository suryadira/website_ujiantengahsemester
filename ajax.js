// JavaScript Document
var ajaxku;
function getprice(kab){
        ajaxku = createajax();
        var url="getprice.php";
        url=url+"?kab="+kab;
        url=url+"&sid="+Math.random();
        ajaxku.onreadystatechange=priceChanged;
        ajaxku.open("GET",url,true);
        ajaxku.send(null);
    }
function priceChanged(){
        var data;
        document.getElementById("dvprice").innerHTML= "Looading.......";
        if (ajaxku.readyState==4)
            {
                data=ajaxku.responseText;
                if(data.length>0)
                    {
                        document.getElementById("dvprice").innerHTML = data
                    }
                else
                    {
                        document.getElementById("dvprice").innerHTML= "";
                    }
            }
        else
            {
                document.getElementById("dvprice").innerHTML= "Looding";
            }           
        }                                           
  
function createajax(){
        if (window.XMLHttpRequest){
                return new XMLHttpRequest();
            }
        if (window.ActiveXObject){
            return new ActiveXObject("Microsoft.XMLHTTP");
            }
        return null;
    }
// 此為回到最上層按鈕的JS
{
    window.onscroll = () =>{
        if(window.scrollY >60){
            document.querySelector('#scroll-top').classList.add('active');
        }else{
            document.querySelector('#scroll-top').classList.remove('active');
        }
    }
    let toggle_button = document.querySelector('.toggle_button');
    toggle_button.onclick = function (){
        toggle_button.classList.toggle('active')
    }



    /*let admin_page1 = document.querySelectorAll('.admin_btn');
    admin_page1.onclick = function (e){
        console.log(e);
        //document.querySelector("." + e.target.id).style.display = "block";
        //admin_page1.classList.toggle('no_display')
    }*/
    //jquery
    $(document).ready(function () {
        let search_target;
        //------------------------新增按鈕
        $(".add").click(function (e) {
            $(".admin1").css("display","none")
            $(".admin2").css("display","none")
            $(".admin3").css("display","none")
            $(".addpage").css("display","")
        });
        //------------------------各個頁面的編輯按鈕
        $(".edit_btn_shop").click(function (e) {
            $(".editpage input#BreakfastShopID").attr("value",search_target);
            $(".admin1").css("display","none")
            $(".admin2").css("display","none")
            $(".admin3").css("display","none")
            $(".editpage").css("display","")
            //console.log(e.target.id);
        });
        $(".edit_btn_supplier").click(function (e) {
            $(".editpage input#FoodID").attr("value",search_target);
            $(".admin1").css("display","none")
            $(".admin2").css("display","none")
            $(".admin3").css("display","none")
            $(".editpage").css("display","")
        });
        $(".edit_btn_menu").click(function (e) {
            $(".editpage input#FoodID").attr("value",search_target);
            $(".admin1").css("display","none")
            $(".admin2").css("display","none")
            $(".admin3").css("display","none")
            $(".editpage").css("display","")
        });
        //------------------------各個頁面的刪除按鈕
        $(".delete_btn_shop").click(function (e) {
            $(".card_request .primarykey").attr("value",search_target);
            //console.log(e.target.id);
        });
        $(".delete_btn_supplier").click(function (e) {
            $(".card_request .primarykey").attr("value",search_target);
        });
        $(".delete_btn_menu").click(function (e) {
            $(".card_request .primarykey").attr("value",search_target);
        });
        //-----------------目前沒用
        $(".card_spec").click(function () { //card動畫設定
            $(".card_show").css("display", "");
            $(".black_background").css("display", "");
        });
        $(".reserve_card").click(function (e) { //card動畫設定
            $(".reserve_card_" + e.target.id).css("display", "");
            $(".black_background").css("display", "");
            
        });
        //------------------黑幕
        $(".black_background").click(function (){
            $(".card_show").css("display", "none");
            $(".card_edit").css("display", "none");
            $(".card_reserve").css("display", "none");
            $(".black_background").css("display", "none");
            $(".card_request").css("display", "none");
        });
        //-------------------關閉按鈕
        $(".close_button").click(function (){
            $(".card_show").css("display", "none");
            $(".card_edit").css("display", "none");
            $(".card_reserve").css("display", "none");
            $(".black_background").css("display", "none");
            $(".card_request").css("display", "none");
        });
        //-----------------------------------
        //                  操作按鈕
        $(".request_button").click(function (e) { //card動畫設定
            search_target = e.target.id;
            console.log(search_target);
            $(".card_request").css("display", "");
            $(".black_background").css("display", "");
        });
        $(".select_table_button").click(function (){
            $(".card_request").css("display", "none");
            $(".black_background").css("display", "none");
        });
        //----------------------------------
    });

}
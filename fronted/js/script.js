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
    let sidebar = document.querySelector('.sidebar');
    /*let admin_page1 = document.querySelectorAll('.admin_btn');
    admin_page1.onclick = function (e){
        console.log(e);
        //document.querySelector("." + e.target.id).style.display = "block";
        //admin_page1.classList.toggle('no_display')
    }*/
    //jquery
    $(document).ready(function () {
        $(".admin_btn").click(function (e) {
            $(".admin1").css("display","none")
            $(".admin2").css("display","none")
            $(".admin3").css("display","none")
            console.log(e.target.id);
            $("." + e.target.id).css("display","")
            /*$(".card_show").css("display", "");
            $(".black_background").css("display", "");*/
        });

        $(".card_spec").click(function () { //card動畫設定
            $(".card_show").css("display", "");
            $(".black_background").css("display", "");
        });
        $(".reserve_card").click(function (e) { //card動畫設定
            $(".reserve_card_" + e.target.id).css("display", "");
            $(".black_background").css("display", "");
            
        });
        $(".black_background").click(function (){
            $(".card_show").css("display", "none");
            $(".card_edit").css("display", "none");
            $(".card_reserve").css("display", "none");
            $(".black_background").css("display", "none");
            $(".card_request").css("display", "none");
        });
        $(".close_button").click(function (){
            $(".card_show").css("display", "none");
            $(".card_edit").css("display", "none");
            $(".card_reserve").css("display", "none");
            $(".black_background").css("display", "none");
            $(".card_request").css("display", "none");
        });
        $(".request_button").click(function (e) { //card動畫設定

            $(".card_request").css("display", "");
            $(".black_background").css("display", "");
        });
        $(".select_table_button").click(function (){
            $(".card_request").css("display", "none");
            $(".black_background").css("display", "none");
        });
    });

}
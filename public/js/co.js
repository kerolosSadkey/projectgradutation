/* upload img in main comment */

$('.uploadimg-bt').on('click',function(){
    $('#file').click();
    return false;
});

$('#file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);        
                $(".img-comment-upload").append($item);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }  
});
/* upload img to make replay to main comment */

$('.make-replay-uploadimg-bt').on('click',function(){
    $('.make-replay-file').click();
    return false;
});

$('.make-replay-file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);
                $('.make-replay-file').parent().parent().append($item);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }  
});
//  make textarea dinamic with line
$("textarea").on('input', function() {
    this.style.height = "";
    this.style.height = Math.min(this.scrollHeight) + "px";
});

$('.interaction-like').on('click',function(){
    $color = $(this).css('color');
    if($color=='rgb(0, 0, 255)'){
      
        $(this).css({'color':''});
    }else{
       
        $(this).css({'color':'blue'});
    }
    
});

$('.interaction-comment').click(function(){
    $s= $(this).parent().parent().children('.all').children().length; ;
    console.log($s);
    $(this).children('span').text($s);
})

$(".editspan").click(function(e){
    $(".showpostforedit").slideDown();("500");

     
   var p= $(this).parent().children().eq(3).text();
   var p1= $(this).parent().children().eq(4).text();
   $("#postidedit").val(p1);
   console.log(p);
     $(".showpostforedit #postbodytextarea").val(p + p1);
    
});
$(".showpostforedit #cancle").click(function(){
       $(".showpostforedit").slideUp("500");
});

$(".showpostfordelete #cancle").click(function(){
    $(".showpostfordelete").slideUp("500");
});
/*
$('#editpostform').on("submit",function (e){
    e.preventDefault();
 var idpost= $("#postidedit").val();
 
$.ajax({
  type:'post',
  url:"/updatedpost/"+idpost,
  data:$("#editpostform").serialize(),
  success:function (respos) {
      $(".showpostforedit").slideUp("500");
      console.log('okkk'+ respos);
  },
  error:function(error){
      console.log(error);
        },
        statusCode: {
            200: function(){
                alert("20000000000000");
                     location.reload()
                 },
            500: function(){
                alert("500000000");
                     location.reload()
                 } 
        }
});
});*/

$(".deletespan").click(function(e){
    $(".showpostfordelete").slideDown();("500");

     
   var p= $(this).attr("id");
   $("#postiddelete").val(p);
   console.log(p);
     $(".showpostforedit #postbodytextarea").val(p + p1);
    
});
 $(".cancle-post-submit").on("click",function(){
    $(".showpostfordelete").slideUp();("500");
 });

 
/*

$('#deletpostform').on("submit",function (e){
    e.preventDefault();
    alert("ccccccccccccc");
 var idpost= $("#postiddelete").val();
 
$.ajax({
  type:'post',
  url:"/deletedpost/"+idpost,
  data:idpost,
  success:function (respos) {
      $(".showpostforedit").slideUp("500");
      alert("dddddddddddd");
  },
  error:function(error){
      console.log(error);
        },
        statusCode: {
            200: function(){
                alert("dddddddddddd");
                     location.reload()
                 },
            500: function(){
                alert("dddddddddddd");
                     location.reload()
                 } 
        }
});
});*/
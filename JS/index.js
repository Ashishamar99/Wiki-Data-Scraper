$("#fetch-db-btn").on("click", function(){

    $.ajax({
        method: "post",
        url: "querydb.py",
        data: { param: ""}
      }).done(function() {
         alert("python prg called")
      });

        // let xhr=new XMLHttpRequest();
        // xhr.open('GET','queries.txt',true);
        // xhr.send();
        // xhr.onload=function(){
        //     if(xhr.status===200){
        //     let data=xhr.responseText;
        //     alert(data);
        //     };
        // };
});
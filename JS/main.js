function fetch_db_records()
{
    let xhr=new XMLHttpRequest();
    xhr.open('GET','resultset.txt',true);
    xhr.send();
    xhr.onload=function(){

        if(xhr.status===200){
        let data=xhr.responseText;
        console.log(data);
            };
};
}

$(document).ready(function(){
        setTimeout(fetch_db_records, 3000);
});

function sendurltoscrape()
{
    alert("scrape button clicked.");
    window.location.replace("wait.html");
}
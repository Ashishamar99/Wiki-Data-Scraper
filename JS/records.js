function fetch_db_records()
{
    let xhr=new XMLHttpRequest();
    xhr.open('GET','resultset.json',true);
    xhr.send();
    xhr.onload=function(){

        if(xhr.status===200){
        let data=xhr.responseText;
        displayJSONData(data);
            };
};
}

function  displayJSONData(data)
{
    dictobj = JSON.parse(data);
    
    let htmlStr='';
    // <thead class="thead-dark"> -> dark theme.
    
    //Link for Bootstraping Table -> https://getbootstrap.com/docs/4.0/content/tables/#table-head-options
    htmlStr+=`
    <table class="table table-hover table-bordered">
    <thead>
            <tr class="bg-success">
            <th scope="col" style="text-align:center"> No </th>
            <th scope="col" style="text-align:center"> URL </th>
            <th scope="col" style="text-align:center"> Status </th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <th scope="row" class="thead-dark" style="text-align:center"> 1) </th>
            <td class="bg-primary text-white" style="text-align:center"> ${dictobj[1][0]} </td>
            <td class="bg-primary text-white" style="text-align:center"> ${dictobj[1][1]} </td>
            </tr>

            <tr>
            <th scope="row" class="thead-dark" style="text-align:center"> 2) </th>
            <td class="bg-danger text-white" style="text-align:center"> ${dictobj[2][0]} </td>
            <td class="bg-danger text-white" style="text-align:center"> ${dictobj[2][1]} </td>
            </tr>

            <tr>
            <th scope="row" class="thead-dark" style="text-align:center"> 3) </th>
            <td class="bg-warning text-white" style="text-align:center"> ${dictobj[3][0]} </td>
            <td class="bg-warning text-white" style="text-align:center"> ${dictobj[3][1]} </td>
            </tr>
        </tbody>
    </table>`;

    document.querySelector('#json-card').innerHTML=htmlStr;
}

$(document).ready(function(){
        setTimeout(fetch_db_records, 3000);
});
<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest</title>
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" href="">
</head>

<body>
    <FORM method="POST" name="ajax" action="">
        <INPUT type="BUTTON" value="Submit"  ONCLICK="submitForm()">
        <p id="dyn"></p>
    </FORM>
</body>

<script type="text/javascript">
    


function submitForm()
{
    let xhr;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function()
    {
        if(xhr.readyState == 4)
        {
            if(xhr.status == 200){
            document.getElementById('dyn').innerHTML ='voici le texte '+xhr.responseText;
            }else
            {
                document.getElementById('dyn').innerHTML="error code "+xhr.status;
            }
        }
    };
    //xhr.open("POST","dom.txt",true);
    //xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded')// pour pouvoir traduire le 'xhr.send' en url classique, sinon  ca renvoie rien
    //let a = "aza&dejn=njkbji"
    //xhr.send("city="+a+"&nom=Henri");

xhr.open('POST','dom.txt',true)
let data = new FormData()
data.append('city','aze&eaze=azeazr')
data.append('name','marie')
xhr.send(data)
}
</script>
</html>
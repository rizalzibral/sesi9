<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4</title>
</head>
<body>

<form>
        <div>
           nilai alas
            <input type="number" id="txalas">
        </div>
        <div>
           nilai tinggi
            <input type="number" id="txtinggi">
        </div>
        <div>
           nilai luas
            <input type="number" id="txluas" disabled>
        </div>
        <div>
            <button type="button" onclick="hLUAS()">hitungluas</button>
        </div>
    </form>
    <div id="hasil"></div>

    <script>
        function hLUAS(){
            let a = document.getElementById("txalas").value;
            let t = document.getElementById("txtinggi").value;
            let l = a*t/2;

            document.getElementById("txLUAS").value = l;
            
        }
    </script>

</form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="user-list"></div>
    <script>
        var userlist = document.getElementById("user-list");
        
        fetch("getUser.php")
           .then(res => res.json())
           .then(data => {
                let html = ""
                data.forEach(element => {
                    html +=`-Tên: <b>${element.name}</b><br>
                    ---------------
                    <br>-Mật khẩu: ${element.password}<p></p>
                    `
                    
                });
                userlist.innerHTML = html;
           })

        setInterval(() => {
            fetch(window.location.href, {
                cache: "no-store"
            }).then(() => {
                location.reload();
            });
        }, 5000);
    </script>
</body>
</html>
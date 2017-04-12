<!DOCTYPE html>
<!-- saved from url=(0041)https://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>MKR Admin-site</title>

    <!-- Bootstrap core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./../css/signin.css" rel="stylesheet">

  <script type="text/javascript">// Promises 
/*var _eid_promises = {};
// Turn the incoming message from extension 
// into pending Promise resolving 
window.addEventListener("message", function(event) { 
    if(event.source !== window) return; 
    if(event.data.src && (event.data.src === "background.js")) { 
        console.log("Page received: "); 
        console.log(event.data); 
        // Get the promise 
        if(event.data.nonce) { 
            var p = _eid_promises[event.data.nonce]; 
            // resolve 
            if(event.data.result === "ok") { 
                if(event.data.signature !== undefined) { 
                    p.resolve({hex: event.data.signature}); 
                } else if(event.data.version !== undefined) { 
                    p.resolve(event.data.extension + "/" + event.data.version); 
                } else if(event.data.cert !== undefined) { 
                    p.resolve({hex: event.data.cert}); 
                } else { 
                    console.log("No idea how to handle message"); 
                    console.log(event.data); 
                } 
            } else { 
                // reject 
                p.reject(new Error(event.data.result)); 
            } 
            delete _eid_promises[event.data.nonce]; 
        } else { 
            console.log("No nonce in event msg"); 
        } 
    } 
}, false); 
 
 
function TokenSigning() { 
    function nonce() { 
        var val = ""; 
        var hex = "abcdefghijklmnopqrstuvwxyz0123456789"; 
        for(var i = 0; i < 16; i++) val += hex.charAt(Math.floor(Math.random() * hex.length)); 
        return val; 
    } 
 
    function messagePromise(msg) { 
        return new Promise(function(resolve, reject) { 
            // amend with necessary metadata 
            msg["nonce"] = nonce(); 
            msg["src"] = "page.js"; 
            // send message 
            window.postMessage(msg, "*"); 
            // and store promise callbacks 
            _eid_promises[msg.nonce] = { 
                resolve: resolve, 
                reject: reject 
            }; 
        }); 
    } 
    this.getCertificate = function(options) { 
        var msg = {type: "CERT", lang: options.lang}; 
        console.log("getCertificate()"); 
        return messagePromise(msg); 
    }; 
    this.sign = function(cert, hash, options) { 
        var msg = {type: "SIGN", cert: cert.hex, hash: hash.hex, hashtype: hash.type, lang: options.lang}; 
        console.log("sign()"); 
        return messagePromise(msg); 
    }; 
    this.getVersion = function() { 
        console.log("getVersion()"); 
        return messagePromise({ 
            type: "VERSION" 
        }); 
    };
}*/
 </script>
</head>

  <body>

    <div class="container">

      <form method="POST" action="checklogin.php" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Email address</label>
        <input type="username" id="myusername" name="myusername" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="mypassword" name="mypassword" class="form-control" placeholder="Password" required="">
        <button id="button" name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

</body></html>
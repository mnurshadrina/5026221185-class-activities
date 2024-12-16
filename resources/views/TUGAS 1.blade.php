<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Gadjah Linktree</title>
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            width: 300px;
            text-align: center;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .button {
            display: block; /* Ensures buttons stack vertically */
            background-color: #333;
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            text-decoration: none; /* Remove underline from links */
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #555;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://drive.google.com/uc?export=view&id=1KyNv-6n8f4cPq8UTY-MLsCbDGK-y1tVr" alt="Kopi Gadjah Logo" class="logo">
        <h1>@kopi.gadjah</h1>
        <p>Kopi Tubruk Gadjah dengan Aroma Khas, Rasa Mantap & Hitamnya Pekat.</p>
        <a href="{{ url('https://api.whatsapp.com/send/?phone=6285218788208&text&type=phone_number&app_absent=0')}}" class="button" target="_blank">WhatsApp Customer Service</a>
        <a href="{{ url('https://www.blibli.com/brand/savoria-official-store?excludeProductList=false&promoTab=false&brand=Kopi%20Tubruk%20Gadjah')}}" class="button" target="_blank">Blibli Official Store</a>
        <a href="{{ url('https://www.tokopedia.com/savoriaofficial/etalase/kopi-tubruk-gadjah')}}" class="button" target="_blank">Tokopedia Official Store</a>
        <a href="{{ url('https://www.lazada.co.id/shop-kopi-instan/lazada5740002360_gadjah%20tubruk-126444447/?savoria-store&from=wangpu&m=shop&q=All-Products')}}" class="button" target="_blank">Lazada Official Store</a>
        <a href="{{ url('https://kopigadjah.id/')}}" class="button" target="_blank">Official Website</a>
        <div class="footer">
            <a href="{{ url('https://linktr.ee/kopi.gadjah')}}" target="_blank">linktr.ee/kopi.gadjah</a>
        </div>
    </div>
</body>

</html>

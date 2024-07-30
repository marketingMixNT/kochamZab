
    

    <h2 >Nowa wiadmość ze strony <a href="https://kochamzab.pl">kochamzab.pl</a></h2>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Imię i nazwisko:</span>
        <span style="font-size: 16px">{{ $name }}o</span>
    </div>

    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Email:</span>
        <span style="font-size: 16px">{{ $email }}</span>
    </div>

  
    <div style="margin-bottom:15px">
        <span style="font-size: 16px;font-weight:800">Wiadomość:</span>
        <p style="font-size: 16px"> {{ $content }}</p>
    </div>

    <div style="display:flex;gap:20px">

        <a href="mailto:{{ $email }}" style='background-color: #014a0a;padding:12px 24px;border-radius:12px;color:white'>Napisz</a>
        
    </div>
</div>

 
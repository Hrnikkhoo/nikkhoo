<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $family = $_POST['family'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = "hamidr.nikkhoo@gmail.com";
    $subject = "پیام جدید از وبسایت شخصی";
    
    $email_content = "نام: $name $family\n";
    $email_content .= "ایمیل: $email\n";
    $email_content .= "شماره تماس: $phone\n\n";
    $email_content .= "پیام:\n$message";
    
    $headers = "From: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";
    
    if(mail($to, $subject, $email_content, $headers)) {
        echo "<script>
                alert('پیام شما با موفقیت ارسال شد');
                window.location.href = 'index.html#contact';
              </script>";
    } else {
        echo "<script>
                alert('متاسفانه در ارسال پیام خطایی رخ داد. لطفا دوباره تلاش کنید');
                window.location.href = 'index.html#contact';
              </script>";
    }
}
?>

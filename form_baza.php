<div class="container mt-5 mb-5 md">
<form action="add_client.php" method="POST">
    <div class="form-group">
        <label for="name">Ваше имя</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Иван Иванов" required>
    </div>

    <div class="form-group">
        <label for="phone">Номер телефона</label>
        <input type="tel" class="form-control" id="phone" name="phone"
               placeholder="+7 (495) 755 69 83" required>
    </div>

    <div style="color:rgb(128, 119, 119);font-size: 13px;">
        Нажимая на кнопку, я согласен(а) с условиями
        <br/>
        <a href="#" style="text-decoration: none; color:rgb(61, 59, 59); font-size: 10px;">
            Пользовательского соглашения, Клиентского соглашения и Terms and Conditions
        </a>
    </div>
    <br/>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Обратиться</button>
</form>
</div>

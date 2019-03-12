<div id="content-wrapper">
    <section id="contact" class="white">
        <div class="container">
            <div class="clearbox50"></div>
            <div class="gap"></div>
            <h2 align="center">Shaxsiy ma'lumotlar bo'limi</h2>
            <div class="gap"></div>

            <div class="col-md-3 fade-up"></div>
            <div class="col-md-6 fade-up">
                <form method="post" id="contactform">
                    <input type="text" name="name" class="name" placeholder="Ism" value="<?= Yii::$app->user->identity->name ?>" required/>
                    <input type="text" name="fam" class="name" placeholder="Familiya" value="<?= Yii::$app->user->identity->fam ?>" required/>
                    <input type="text" name="otec" class="name" placeholder="Otasining ismi" value="<?= Yii::$app->user->identity->otec ?>" required/>
                    <input type="date" name="birth_date" class="name" placeholder="Tug'ilgan sana" value="<?= Yii::$app->user->identity->birth_date ?>" required/>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <label><input type="radio" class="option-input radio" name="example" /> Erkak</label>
                        </div>
                        <div class="col-md-4">
                            <label><input type="radio" class="option-input radio" name="example" /> Ayol</label>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="clearbox10"></div>
                    <input type="tel" name="tel" class="name" placeholder="Telefon raqam" value="<?= Yii::$app->user->identity->tel ?>" required>
                    <input type="text" name="email" class="email" placeholder="Email" value="<?= Yii::$app->user->identity->email ?>" required/>
                    <input type="text" name="login" class="name" placeholder="Login" value="<?= Yii::$app->user->identity->login ?>" required/>
                    <input type="password" name="password" class="name" placeholder="Parol" value="<?= Yii::$app->user->identity->password ?>" required/>
                    <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Saqlash" />
                </form>
            </div><!-- col -->
            <div class="col-md-3 fade-up"></div>

            <div class="gap"></div>
        </div>
    </section>
</div>
      <section class="footer">
          <div class="container">
            <div class="row">
                <div class="col l8 s12 m12">
                    <div class="backf">
                    <p class="p14">ФОРМА ОБРАТНОЙ СВЯЗИ</p>
                    <p class="p14">Есть вопросы или предложения? <br>Напишите нам.</p>
                    <form class="form1" action="/contacts" method="POST">
                      {{ csrf_field() }}
                        <div class="input-field col l11 s11 m11 ots">
                          <input placeholder="ИМЯ" id="first_name" type="text" name="name" class="validate area1" required> 
                        </div>
                        <div class="input-field col l11 s11 m11 ots">
                          <input id="email" type="email" class="validate area2" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="input-field col l11 s11 m11 ots">
                          <textarea id="textarea1" class="materialize-textarea area" name="message" placeholder="Сообщение" required></textarea>
                        </div>
            <div class="col l12 s12 m12 iu">
            <button class="waves-effect waves-light btn btn2" type="submit">ОТПРАВИТЬ</button>
            </div>
                    </form>
                    </div>
                </div>
                <div class="col l4 m12 s12">
                <p class="p13">Контакты</p>
                <p class="p15">+7 9254931866</p>
                <p class="p15">г. Омск ул. Маршала Жукова, д 72, корп 1</p>
                <p class="p15">infoasi@mail.ru</p>
                </div>
            </div>
          </div>
      </section>
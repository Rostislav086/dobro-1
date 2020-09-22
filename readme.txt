1. Как только обновишь проект убей виртуалку и создай новую. Это из-за нее cross-env не работает.
Но перед этим в Homestead.yaml

folders:
    - map: ~/code
      to: /home/vagrant/code
      type: "nfs" -добавь вот эту строчку

команды в папке Homestead :
 - vagrant destroy
 - редактируешь Homestead.yaml
 - vagrant up

2.  composer update
    npm install
    nmp run dev
    все должно собраться.

3. Надо создать БД.
    - настройки БД в .env

    DB_CONNECTION=mysql
    DB_HOST=192.168.10.10
    DB_PORT=3306
    DB_DATABASE=dobro
    DB_USERNAME=homestead
    DB_PASSWORD=secret

    - консоль
    vagrant ssh
    cd code/dobro - или как там у тебя
    mysql homestead -u homestead   подключаемся к БД
    должно быть так в консоли:
    mysql>
    дальше
    CREATE DATABASE dobro; - создаем БД
    SHOW DATABASES;
    +---------------------+
    | Database            |
    +---------------------+
    | information_schema  |
    | dobro               | должна появиться наша БД
    | homestead           |
    | #mysql50#lost+found |
    | mysql               |
    | performance_schema  |
    | sys                 |
    +---------------------+
    exit   выходим


    php artisan migrate --seed

    запускаем миграции. база заполниться таблицами и данными. По данным пока есть фонды и категории фондов.

4. Сейчас в апи доступен пока один метод для теста.
По url - /fonds тебе веренется json с фондами.
 запрос вроде того - const data = await axios.get('/fonds'); ну с этим разберешся
 Остальное обсудим.

5. Чтобы работали картинки . Храним в storage/app/public/img
в шаблоне выводим так  - /img/logo.png
чтобы это работало : php artisan storage:link он создаст симилинку в папке public
Если все сделаешь правильно должна отображатсья картинка лого в хедэре
Остальное обсудим.

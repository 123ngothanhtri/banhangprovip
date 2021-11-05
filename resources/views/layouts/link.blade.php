
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Chakra+Petch:ital,wght@1,500&family=Crimson+Pro:wght@500&family=Exo+2&family=Goldman&family=Josefin+Sans&family=Nunito:wght@600&family=Patrick+Hand+SC&family=Quicksand:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@if ($settingAdmin->theme == 0)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
@elseif($settingAdmin->theme==1)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cerulean/bootstrap.min.css" integrity="sha512-d92pbjOyfB7JyOqVxxcIlAonmTTqtlDWi/3TS7FO0D7uAzldYLxs2FVoSY67rKC62S+voKfedGKAKKP5/JDmXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==2)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cosmo/bootstrap.min.css" integrity="sha512-5dkKo/5NC82R3Fe07QSxl//Ho8EIRYpyJFgW0khbqSsM157I47fojmPT9LLIV7WGKzWt4zEFrEUoU2yTFndWnQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==3)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cyborg/bootstrap.min.css" integrity="sha512-lClzayU/EqX2Du6vlZ1CDtYxqI311AxmlqlUH6oqJvSb8bcZ+04JsCnZWzh9lEOUsER0vzz2r69nRBnT1+ZJ2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==4)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/darkly/bootstrap.min.css" integrity="sha512-ezMYxqWWivSksLPunUveJboEiY2V1G8cP/XVVwuvdT1X8Hil4ZIy9xKbBOXot+yEe6NtNw0XY4sQvZ0LwBrj5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==5)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/flatly/bootstrap.min.css" integrity="sha512-A6eytCnxDsOtfv6WqcF+KeZitCIo1SE9CR7wy572XUNV3r2y/QG/CVWlf0zwHfoVrD6kctgnAA3KX4PpbOEp5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==6)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/journal/bootstrap.min.css" integrity="sha512-cSASQQjo5ZhpNg+z0cFB/e3qV6IECirhFhzX7HQdUyLduoo08yfivbKh9e5MQVUSUkb9L7+chWe4hw4vX8c2OA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==7)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/litera/bootstrap.min.css" integrity="sha512-Ze0T5yoPnXhcETAFZDb7QSgCVQa1QDkA1c+wrFiRdSqcVXOnyutqKxOzt/vE3Qo9Sqto5EdJuBxQ7LLyOd3ofg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==8)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/lumen/bootstrap.min.css" integrity="sha512-8eeEg7VIorsp0HeGKnQ2jiVFdmYLGEZsG1gGL6tsLuY24BdxueJMQ1vPSzlwm7wZR4zCgkLbPFUAoKWSEoih4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==9)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/lux/bootstrap.min.css" integrity="sha512-mOju8pKJzu/lzzsmSWS8MrvFTXE9JMdOmhsz4OzN4NNfkERAUt4M7qjVQTbrWpx5SAJCv6Z2mrGY20ta6W2n+Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==10)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/materia/bootstrap.min.css" integrity="sha512-tuK97lbISRK+JVk9KrcvdZ4Z2RQ1OavVrfk3qBvWlavCphmUd7FaKx5acPB80IQJjBvEOs5XAXTcVsvIPdYXlg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==11)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/minty/bootstrap.min.css" integrity="sha512-2JwatRkc2HYo75o1UXM+NCB+zM5aJrHLRgoM8w3FXdElb7CTMcgBLZQZ+oDEfOmLBHFx8WYk7z/TrQtDXi5aPg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==12)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/morph/bootstrap.min.css" integrity="sha512-wEQ4jcmKfq26vy46FnflTB8+nTszRmhTN1XLugdBw+CEiE+5xbES3lmf7sbM+HJpWfwdrVQZlJu5WVw9mpc1Gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==13)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/pulse/bootstrap.min.css" integrity="sha512-G+hJSSbMseD7djQrdXKs1AS+zcYpAdBYQCyua1SfZkHO8Il8Y3SFdG21cbIzjDu8vR1/KGM0iOY4Mt/b8K6QBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==14)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/quartz/bootstrap.min.css" integrity="sha512-vt+ChsCC6nCPKc8uMQmws/zkZI6s8+4r/6UaU8DNev7L7PHpiVNsvjL0FDbMu/OJ2bijJIj22XTGMETnQyAg3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==15)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/sandstone/bootstrap.min.css" integrity="sha512-QK+ir0v5shYBLAO2Amh+4vdAeopSZ3Y85RirK6P+aNiSnJXTRf71Gjhh9XwdcTyZbENdF6z2Ft8sjHnAO4OOzw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==16)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/simplex/bootstrap.min.css" integrity="sha512-gNjnsFYJ+y8OHPbRbmQ2tgAeDzWzgEQwvOnk/xxMV9Wc1lzBrE2D5aA6EAFXFBnawJTxT9Fyc/R9SvlUpgWzeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==17)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/sketchy/bootstrap.min.css" integrity="sha512-IvL2UAwPYd0MMYxkUmjkSFqeNG5IIAirwePMOoSHGn5EUb2lmPvzd2+jmaAmq10LuB3ifqZXbimXGiB09CGabQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==18)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/slate/bootstrap.min.css" integrity="sha512-93/yAynQoJJouPwTyrwfKZD1ZTxMj455NOklBIfgsiMhlid9DRpKGWo38v8pY6sCsv6fkr6K617zSENd6B4Esw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==19)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/solar/bootstrap.min.css" integrity="sha512-OquBRrYVEj+u1aovfPXO4gnM6+eN/DCTkywhDEZgxf/qr8Sw93gL9mlIOEosKk/AVJi2mAIpwwpDqvF5kry3Bw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==20)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/spacelab/bootstrap.min.css" integrity="sha512-JDMZB/pX/weUIeml2Yt+oKSoda/PJ3+wgNvL81EaM3lTu4hi/ROXAyK5PQIUMPvifjgo6/xcismnPxS89+LX9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==21)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/superhero/bootstrap.min.css" integrity="sha512-MfxZBAGcmgRfki9ARFOm7QUq3hFa4Ji4kjETvLIOB7GMxP9B670Aji+NOUg8qD8Pb1GBILS2euXVtzqFkqLJBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==22)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/united/bootstrap.min.css" integrity="sha512-+SjUACLqMqKV8qpN3ieywwYRhf5VKfDc1jYWxC++VJAOKSWdg2V2d6heDCScg4md8CxoyVUMXu0ObajHgmIoXA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==23)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/vapor/bootstrap.min.css" integrity="sha512-/o6Rfch4Askmp86SNLGrt+XQoL5IuQuMRVeb09tTtNS0AQvY1ZQ/VA9EFWEv0cv1ez+DS44GrtN25N11e4Nj2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@elseif($settingAdmin->theme==24)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/yeti/bootstrap.min.css" integrity="sha512-pFwTvgeJC+UPQl18jojYGSlD/+QROvB5160wcNyjC/dcbPWjrwc20I+ThujdFClrsmQ8ycl7q/GEizYGUxGviw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@else
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/zephyr/bootstrap.min.css" integrity="sha512-0wC5Te061bDGjl4y6Gu4TB0+d7AG+PwgBP5kb2fOyCsxF4R17Zs62trxV393qGfMb/FOOwNGHl9CtD0cVR+enA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endif

@if ($settingAdmin->font == 'Alumni Sans')
    <style>
        * {
            font-family: 'Alumni Sans', sans-serif;
        }

    </style>
@elseif($settingAdmin->font=='Exo 2')
    <style>
        * {
            font-family: 'Exo 2', sans-serif;
        }

    </style>
@elseif($settingAdmin->font=='Goldman')
    <style>
        * {
            font-family: 'Goldman', cursive;
        }

    </style>
@elseif($settingAdmin->font=='Josefin Sans')
    <style>
        * {
            font-family: 'Josefin Sans', sans-serif;
        }

    </style>
@elseif($settingAdmin->font=='Nunito')
    <style>
        * {
            font-family: 'Nunito', sans-serif;
        }

    </style>
@elseif($settingAdmin->font=='Patrick Hand SC')
    <style>
        * {
            font-family: 'Patrick Hand SC', cursive;
        }

    </style>
@elseif($settingAdmin->font=='Crimson Pro')
    <style>
        * {
            font-family: 'Crimson Pro', cursive;
        }

    </style>
@elseif($settingAdmin->font=='Chakra Petch')
    <style>
        * {
            font-family: 'Chakra Petch', cursive;
        }

    </style>
@elseif($settingAdmin->font=='Quicksand')
    <style>
        * {
            font-family: 'Quicksand', cursive;
        }

    </style>
@endif

<style type="text/css">
    
        #preloader {
            position: fixed;
            background: rgb(255, 255, 255,0.5);
            height: 100vh;
            width: 100%;
            z-index: 9999
        }

        #spinner1 {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #spinner2 {
            width: 100%;
            height: 100%;
            border-top: 15px solid LightPink;
            border-left: 15px solid chartreuse;
            border-right: 15px solid yellow;
            border-bottom: 15px solid cyan;
            border-radius: 50%;
            animation: example 1s linear infinite;
        }

        @keyframes example {
            0% {
                transform: rotate(0deg),
            }

            100% {
                transform: rotate(360deg)
            }
        }
</style>
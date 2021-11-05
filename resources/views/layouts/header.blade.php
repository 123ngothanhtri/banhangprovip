{{-- <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
        
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ $settingHome->logo }}" height="50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold btn btn-danger" href="{{ url('/') }}"><i class="fas fa-home"></i> Trang chủ</a>
                </li>
            </ul>
            
            <form action="{{ url('search-product') }}" method="POST" class="d-flex me-2">@csrf
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm" name="keyWord">
                <button class="btn btn-success" type="submit">Tìmkiếm</button>
            </form>
            <a class="btn btn-warning" href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
        </div>
    </div>
</nav> --}}
<style>
    
    #navpro {
        position: fixed;
        top: 0;
        height: 50px;
        width: 100%;
        background: #22a6b3;
        z-index: 99;
    }

    #navpro ul {
        float: right;
        margin-right: 22px;
    }

    #navpro ul li {
        list-style: none;
        display: inline-block;
        line-height: 50px;
    }

    #navpro ul li a {
        text-decoration: none;
        display: block;
        padding-left: 1em;
        padding-right: 1em;
        font-size: 15px;
        color: white;
        text-transform: uppercase;
    }

    #navpro ul li a:hover {
        background: #147c96;
    }

    /* #navpro > a {
        text-decoration: none;
        line-height: 50px;
        text-transform: uppercase;
        margin-left: 22px;
        font-size: 25px;
        color: white;
    } */
    #navpro img {
        height: 40px;
        margin-left: 22px;
        margin-top: 5px;
    }
    
    #navpro #label_open,#label_close{
        font-size: 25px;
        color: white;
        float: right;
        line-height: 50px;
        padding-right: 20px;
        padding-left: 20px;
        cursor: pointer;
        display: none;
    }
    
    #navpro #check{
        display: none;
    }
    @media (max-width:750px) {
        #navpro #label_open{
            display: block;
        }
        #navpro ul{
            padding: 0;
            position: fixed;
            top: 50px;
            left: -50%;
            height: 100vh;
            width: 50%;
            background: #1289A7;
            transition: all 0.5s;
            z-index: 9;
            text-align: center
        }
        #navpro ul li {
            display: block;
            line-height: 50px;
        }
        #navpro #check:checked ~ ul{
            left: 0;
        }
        #navpro #check:checked ~ #label_open{
            display: none;
        }
        #navpro #check:checked ~ #label_close{
            display: block;
        }
        #navpro ul form{
            margin: 0 8px 0 8px;
        }
    }
    #navpro form{
        float: right

    }
    #navpro ul form input{
        margin-top: 8px;
        padding: 5px 7px 5px 7px;
        border: none;
        outline: none;
        border-radius: 5px;
    }
    #navpro ul form button{
        color: rgb(255, 255, 255);
        border: none;
        cursor: pointer;
        border-radius: 5px;
        background: #30336b;
        padding: 5px 7px 5px 7px;
        margin-top: 8px;
    }
</style>

<nav id="navpro">
    <a href="#">
        <img src="{{ $settingHome->logo }}" alt="">
    </a>

    <input type="checkbox" id="check">
    <label for="check" id="label_open">
        <i class="fas fa-bars"></i>
    </label>
    <label for="check" id="label_close">
        <i class="fas fa-times"></i>
    </label>

    <ul>
        <li><a href="{{ url('/') }}">Trang chủ</a></li>
        <li><a href="{{ url('/cart') }}">Giỏ hàng</a></li>
        <form action="{{ url('search-product') }}" method="post">@csrf
            <input type="text" placeholder="Tìm kiếm">
            <button type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
        </form>
    </ul>
    
</nav>
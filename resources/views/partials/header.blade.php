<header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="nav justify-content-center mt-5">
                <ul class="nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-bg-dark" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-bg-dark" href="{{ route('trains') }}">Trains</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<style scoped>
    header {
        height: 100px;
        background-color: rgb(49, 49, 49);
    }
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ 'Lista produktów' }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Ilość</th>
                                <th scope="col">Jm</th>
                                <th scope="col">Cena</th>
                                <th scope="col">Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>iPad Pro</td>
                                <td>
                                    Czip Apple M2 zapewnia niesamowity skok wydajności podczas wykonywania wymagających zadań i sprawia, że bateria wystarcza na cały dzień
                                </td>
                                <td>5</td>
                                <td>szt.</td>
                                <td>4499.00</td>
                                <td class="col col-lg-1">
                                    <button class="btn btn-success btn-sm">E</button>
                                    <button class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>iPhone 15 Pro</td>
                                <td>
                                    Niegasnący wyświetlacz Super Retina XDR o przekątnej 6,1 cala z technologią ProMotion i Dynamic Island
                                </td>
                                <td>10</td>
                                <td>szt.</td>
                                <td>5999.00</td>
                                <td>
                                    <button class="btn btn-success btn-sm">E</button>
                                    <button class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>iPhone 14</td>
                                <td>
                                    Trwała konstrukcja o przekątnej 6,1 cala z warstwą Ceramic Shield i odporność na wodę oraz pył
                                </td>
                                <td>10</td>
                                <td>szt.</td>
                                <td>4099.00</td>
                                <td>
                                    <button class="btn btn-success btn-sm">E</button>
                                    <button class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>MacBook Pro 16 cali</td>
                                <td>
                                    Z M3 Pro lub M3 Max, najbardziej zaawansowanymi czipami do komputera osobistego, jakie stworzyliśmy, zrealizujesz na MacBooku Pro najbardziej wymagające projekty
                                </td>
                                <td>5</td>
                                <td>szt.</td>
                                <td>13999.00</td>
                                <td>
                                    <button class="btn btn-success btn-sm">E</button>
                                    <button class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>iMac</td>
                                <td>
                                    Dzięki turbodopalaniu czipem Apple M3 iMac bardzo dynamicznie i płynnie reaguje na wszystkie Twoje polecenia
                                </td>
                                <td>5</td>
                                <td>szt.</td>
                                <td>7499.00</td>
                                <td>
                                    <button class="btn btn-success btn-sm">E</button>
                                    <button class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<div id="basket-box" class="modal modal-signin position-static bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
    @if (session('login'))
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">
                    Избранное
                </h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="/zakaz" method="GET">
                    <ul class="d-grid gap-4 my-5 list-unstyled">
                        @foreach ($tovars as $elem)
                            @foreach ($elem as $elem_dubl)
                                @include('module_SP.basket_elem',[
                                    'name_tovar' => $elem_dubl['name_tovar'],
                                    'a_tovar' => $elem_dubl['a_tovar'],
                                ])
                            @endforeach
                        @endforeach
                    </ul>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-warning">
        Зарегестрируйтесь
    </div>
    @endif
</div>

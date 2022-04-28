
<div id="basket-box" class="modal modal-signin position-static bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
    @if (session('login'))
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">
                    Корзина
                </h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <ul class="d-grid gap-4 my-5 list-unstyled">
                    <li class="d-flex gap-4">
                        <img class="bi text-muted flex-shrink-0" width="48" height="48">
                        <div>
                            <h5 class="mb-0">
                                Grid view
                            </h5>
                            Not into lists? Try the new grid view.
                        </div>
                    </li>
                    <li class="d-flex gap-4">
                        <img class="bi text-muted flex-shrink-0" width="48" height="48">
                        <div>
                            <h5 class="mb-0">
                                Bookmarks
                            </h5>
                            Save items you love for easy access later.
                        </div>
                    </li>
                    <li class="d-flex gap-4">
                        <img class="bi text-muted flex-shrink-0" width="48" height="48">
                        <div>
                            <h5 class="mb-0">
                                Video embeds
                            </h5>
                            Share videos wherever you go.
                        </div>
                    </li>
                </ul>
                <button type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-dismiss="modal">Заказать</button>
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-warning">
        Зарегестрируйтесь
    </div>
    @endif
</div>

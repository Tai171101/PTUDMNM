@include('front-end.layouts.button')
<form action="{{ route('cart.add') }}" id="data-form-add-to-cart" method="POST">
  {{ csrf_field() }}
  <input id="qty" type="number"  name="qty" value="1" min="1" max="100" hidden>
  <input id="data-input-add-to-cart" type="text"  name="txtBookId" value="" hidden min="1" max="100">
</form>
<footer class="page-footer" >
  <div class="container">
  </div>
  <div class="footer-copyright">
    <div class="container">
   
    <a class="grey-text text-lighten-4 right" title="" target="_blank" href="#"></a>
    </div>
  </div>
</footer>
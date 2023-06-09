@extends('template')

@section('content')
    <!-- Open the modal using ID.showModal() method -->
    <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_1.showModal()">open modal</button>
<dialog id="my_modal_1" class="modal">
  <form method="dialog" class="modal-box">
    <h3 class="font-bold text-center text-2xl">Notification</h3>
    <p class="py-4 text-center text-lg">Are you sure want to logout?</p>
    <div class="modal-action">
      <!-- if there is a button in form, it will close the modal -->
      <button class="btn text-white" style="background-color: #AF4670">Cancel</button>
      <button class="btn btn-outline ">Logout</button>
    </div>
  </form>
</dialog>

<button class="btn" onclick="my_modal_2.showModal()">open modal</button>
<dialog id="my_modal_2" class="modal">
  <form method="dialog" class="modal-box">
    <h3 class="font-bold text-center text-2xl">Notification</h3>
    <p class="py-4 text-center text-lg">Sorry, you're not login yet </p>
    <div class="modal-action">
      <!-- if there is a button in form, it will close the modal -->
      <button class="btn btn-outline ">Cancel</button>
      <button class="btn text-white" style="background-color: #AF4670">Login</button>
    </div>
  </form>
</dialog>
@endsection
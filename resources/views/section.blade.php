<x-header/>
<section class="wsus__chat_app">

 <x-sidechatlist/>
       <x-favourite/>
        <div class="wsus__save_message">
            <div class="top">your space</div>
            <div class="wsus__save_message_center">
                <div class="icon">
                    <i class="far fa-bookmark"></i>
                </div>
                <div class="text">
                    <h3>Saved Messages</h3>
                    <p>Save messages secretly</p>
                </div>
                <span>you</span>
            </div>
        </div>

        <div class="wsus__user_list_area">
            <div class="top">All Messages</div>
           <x-messagealll/>
    </div>

    <div class="wsus__chat_area">

       <x-chatarea/>

  <x-userdetail/>
</section>
<!--==================================
    Chatting Application End
===================================-->
<x-footer/>

<form class="chat-form" enctype="multipart/form-data">
    <div class="chat-container">
        <div class="form-input">
            <textarea class="text-area-control text-area-scroll" id="send_message" placeholder=" Type your message..."></textarea>
        </div>
        <!--close form-input-->
        <div class="form-input">
            <label for="upload-files" id="upload-label">
                <i class="fas fa-paperclip fa-uploads"></i>
                <i class="fas fa-file-image fa-uploads"></i>
            </label>
            <input type="file" id="upload-files" class="files-upload" name="send_file">
        </div> <!-- close form-input-->
    </div><!--close chat-container-->
    <div class="files-error"></div>

</form>
<!--end chat-form-->
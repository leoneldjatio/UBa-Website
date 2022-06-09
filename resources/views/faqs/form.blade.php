<div class="form-group">
    <label for="question">Faq question</label>
    <input type="text" name="question" id="question" class="form-control" placeholder="Enter a valid question"
        value="{{ old('question') ?? ($faqs->question ?? '') }}">
</div>
<div class="form-group">
    <label for="response">Provide a response to this</label>
    <textarea name="response" class="form-control" id="response" cols="30"
        rows="10">{!!  old('response') ?? ($faqs->response ?? '') !!}</textarea>
</div>

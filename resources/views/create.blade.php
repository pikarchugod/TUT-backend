<form action="/books" method="POST">
    @csrf
    <input type="text" name="title" placeholder="書名">
    <input type="text" name="author" placeholder="作者">
    <input type="text" name="description" placeholder="描述">
    <input type="text" name="image" placeholder="圖片路徑">
    <input type="text" name="status" placeholder="狀態">
    <button type="submit">提交</button>
</form>
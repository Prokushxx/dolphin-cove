<form action="{{ route('program.store') }}" method="post">
    <h1>Programs Selection</h1>
    <form>
        <label for="p_name">p_name</label><br>
        <input type="text" id="p_name" name="p_name"><br>
        <label for="p_costs"></label><br>
        <input type="text" id="p_cost" name="p_costs">
        <input type="submit" value="Submit">
    </form>
</form>
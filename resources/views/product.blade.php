<form action="/product" method="post">
    @csrf
    <table>
        <tr>
            <td>Product Description</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>List Price</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Discount Percent</td>
            <td><input type="text" name="percent">(%)</td>

        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Calculation</button>
            </td>
        </tr>
    </table>
</form>

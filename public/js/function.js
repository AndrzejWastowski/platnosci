
function formatCurrency(total) {
    var neg = false;
    if(total < 0) {
        neg = true;
        total = Math.abs(total);
    }
    return parseFloat(total, 10).toFixed(2).toString();
}
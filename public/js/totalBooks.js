const totalBooksElment = document.querySelector('.total-books')
async function totalBooks() {
    let total = await fetch('/api/books')
    total = await total.json()
    totalBooksElment.innerHTML = total.total_schedulers
}
totalBooks()
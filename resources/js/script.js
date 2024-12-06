console.log("test");

const loadData = async (url) => {
    const response = await fetch(url);
    console.log(response);

    const data = await response.json();
    console.log(data);
    const myList = document.getElementById("latest-books");

    data.forEach((book) => {
        myList.innerHTML +=
            "<li>" + book.title + "<br>" + book.price + "</li>" + "<br>";
    });
};

loadData("/api/books/latest");

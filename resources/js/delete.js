$(function () {
    $(".btn-delete").on("click", function () {
        Swal.fire({
            title: "Czy napewno chcesz usunąć record?",
            icon: "warning",
            showConfirmButton: true,
            confirmButtonText: "Tak",
            showCancelButton: true,
            cancelButtonText: "Nie",
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    method: "DELETE",
                    url: deleteUrl + $(this).data("id"),
                    // url: "http://127.0.0.1:8000/users/" + $(this).data("id"),
                    //data: { id: $(this).data("id") } alternatywny sposob na przekazanie id do metody destroy w controllerze UserController
                })
                    //funkcja done wykona sie gdy otrzymamy informacje z serwera po tym jak z sukcesem zostanie przetworzone zadanie (request)
                    .done(function (data) {
                        window.location.reload(); //to jest sposob na odswiezenie strony po usunieciu rekordu * this is a way to refresh the page after remove user's record
                    })
                    .fail(function (data) {
                        Swal.fire(
                            "Oops",
                            data.responseJSON.message,
                            data.responseJSON.status
                        );
                    });
            }
        });
    });
});

// Di dalam file edit-button.js
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".checkbox");
    const editButton = document.getElementById("editButton");

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener("change", function () {
            let selectedIds = [];
            
            // Mengumpulkan ID prangkat yang dicentang
            checkboxes.forEach(function (cb) {
                if (cb.checked) {
                    selectedIds.push(cb.getAttribute("nip"));
                }
            });

            // Mengaktifkan atau menonaktifkan tombol "Edit" berdasarkan jumlah checkbox yang dicentang
            if (selectedIds.length === 1) {
                editButton.removeAttribute("disabled");
            } else {
                editButton.setAttribute("disabled", "true");
            }
        });
    });

    // Menambahkan fungsi untuk mengarahkan ke halaman edit saat tombol "Edit" diklik
    editButton.addEventListener("click", function () {
        // Mendapatkan ID yang dicentang
        const selectedId = document.querySelector(".checkbox:checked").getAttribute("nip");
        
        if (selectedId) {
            // Redirect ke halaman edit dengan ID yang dipilih
            window.location.href = "edituser.php?id_room=" + selectedId;
        }
    });
});

<style>
    .show-container {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        background-color: rgb(219, 219, 219);
        padding: 10px 0px;
        width: 80%;
        height: 85%;
        border-radius: 20px;
        gap: 5px;
    }
    .show-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 95%;
        height: 15%;
        gap: 5px;
    }
    .show-info:nth-child(4){
        height: 30%;
    }
    .show-info-inner{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 10px;
        background-color: rgb(235, 235, 236);
        border-radius: 20px;
        padding: 2px;
    }
    .show-info-data{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 10px;
    }
    .show-label-title{
        font-size: 15px;
        font-weight: 700;
        margin: 0;
    }
    .show-label{
        font-size: 15px;
        font-weight: 600;
        margin: 0;
    }
    .show-text{
        font-size: 15px;
        font-weight: 400;
        margin: 0;
    }
    .purchase-number{
        background-color: rgb(235, 235, 236);
        border-radius: 20px;
        padding: 2px;
        width: 30%;
        text-align: center;
    }
    .show-buttons {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 15%;
        gap: 10px;
    }
    .show-button {
        padding: 5px 20px;
        text-decoration: none;
        cursor: pointer;
        color: black;
        border-radius: 20px;
        font-size: 15px;
        font-weight: 700;
        transition: 0.5s;
    }
    .show-input {
        width: 15%;
        padding: 1px;
        height: 10%;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid black;
        margin-bottom: 4px;
        font-size: 15px;
    }
    .show-edit {
        background-color: #3073e8;
    }
    .show-edit:hover {
        background-color: #124db3;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }
    .show-back {
        background-color: #e1d534;
    }
    .show-back:hover {
        background-color: #baae03;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }
</style>
"use strict";

const server = "http://localhost:8000/api";

const encodeFileAsBase64URL = async (file) => {
    return new Promise((resolve) => {
        const reader = new FileReader();
        reader.addEventListener("loadend", () => {
            resolve(reader.result);
        });
        reader.readAsDataURL(file);
    });
};

const volver = () => navigator.back();

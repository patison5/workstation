const express = require("express");
const catalogController = require('../controllers/catalog')
const filterController  = require('../controllers/filter')

const router = express.Router();

router.get("/", 	catalogController.getProduct);
router.get("/:id",  catalogController.getProductById);

router.post("/filter", 	filterController.getFilterdProduct);
router.get("/filter/*", filterController.getFilterdProduct2);

module.exports = router;

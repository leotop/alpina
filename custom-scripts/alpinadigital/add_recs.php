<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if ($USER->isAdmin()) {
	CModule::IncludeModule("iblock");
	$books = array(
		5561,
		5567,
		5569,
		5655,
		5727,
		5797,
		5915,
		5971,
		6071,
		6083,
		6263,
		6345,
		7371,
		8740,
		5487,
		5499,
		5503,
		5511,
		5515,
		5553,
		5965,
		6039,
		6059,
		6089,
		6125,
		6161,
		6193,
		6199,
		6253,
		6305,
		6307,
		6311,
		6317,
		6323,
		6341,
		6343,
		6347,
		6351,
		6355,
		6367,
		6371,
		6399,
		6401,
		6415,
		6423,
		6431,
		6433,
		6435,
		6437,
		6439,
		6441,
		6447,
		6449,
		6451,
		6463,
		6473,
		6481,
		6491,
		6493,
		6499,
		6507,
		6509,
		6511,
		6515,
		6581,
		6585,
		6611,
		6613,
		6615,
		6617,
		6649,
		6655,
		6671,
		6681,
		6727,
		6729,
		6731,
		6759,
		6763,
		6775,
		6777,
		6781,
		6791,
		6793,
		6795,
		6799,
		6807,
		6823,
		6833,
		6837,
		6843,
		6863,
		6904,
		6910,
		6918,
		6920,
		6922,
		6944,
		6990,
		6994,
		6996,
		6998,
		7012,
		7061,
		7065,
		7067,
		7071,
		7075,
		7079,
		7083,
		7085,
		7087,
		7178,
		7184,
		7186,
		7242,
		7333,
		7343,
		7347,
		7369,
		7395,
		7397,
		7413,
		7416,
		7418,
		7420,
		7422,
		7428,
		7444,
		7446,
		7467,
		7473,
		7481,
		7489,
		7493,
		7495,
		7507,
		7515,
		7521,
		7529,
		7531,
		7553,
		7559,
		7567,
		7591,
		7595,
		7609,
		7629,
		7635,
		7641,
		7643,
		7651,
		7689,
		7694,
		7702,
		7704,
		7706,
		7714,
		7720,
		7728,
		7730,
		7738,
		7746,
		7752,
		7754,
		7797,
		7803,
		7817,
		7821,
		7827,
		7837,
		7844,
		7846,
		7851,
		7865,
		7867,
		7871,
		7885,
		7893,
		7897,
		7905,
		7907,
		7911,
		7918,
		7920,
		7926,
		7930,
		7934,
		7944,
		7946,
		7948,
		7982,
		7986,
		7990,
		8006,
		8008,
		8021,
		8026,
		8042,
		8044,
		8081,
		8085,
		8111,
		8139,
		8149,
		8153,
		8159,
		8175,
		8177,
		8186,
		8192,
		8196,
		8206,
		8236,
		8246,
		8258,
		8274,
		8276,
		8282,
		8288,
		8290,
		8292,
		8296,
		8298,
		8308,
		8310,
		8344,
		8348,
		8402,
		8404,
		8418,
		8436,
		8438,
		8446,
		8454,
		8460,
		8480,
		8518,
		8520,
		8544,
		8562,
		8566,
		8570,
		8576,
		8582,
		8584,
		8596,
		8606,
		8614,
		8616,
		8626,
		8652,
		8684,
		8688,
		8692,
		8694,
		8696,
		8700,
		8738,
		8758,
		8760,
		8766,
		8772,
		8774,
		8786,
		8790,
		8796,
		8828,
		8834,
		8836,
		8848,
		8852,
		60911,
		60915,
		66418,
		66425,
		66450,
		66460,
		66487,
		66489,
		66491,
		66494,
		66502,
		67169,
		67827,
		67906,
		69004,
		69020,
		73704,
		75264,
		76319,
		76690,
		5479,
		5481,
		5483,
		5485,
		5489,
		5493,
		5495,
		5497,
		5501,
		5505,
		5507,
		5509,
		5513,
		5517,
		5519,
		5521,
		5525,
		5527,
		5531,
		5533,
		5535,
		5539,
		5541,
		5547,
		5549,
		5551,
		5555,
		5557,
		5559,
		5563,
		5565,
		5571,
		5573,
		5575,
		5577,
		5581,
		5583,
		5585,
		5587,
		5589,
		5591,
		5593,
		5595,
		5597,
		5599,
		5603,
		5605,
		5607,
		5609,
		5611,
		5613,
		5615,
		5617,
		5619,
		5621,
		5623,
		5625,
		5627,
		5629,
		5631,
		5633,
		5635,
		5637,
		5639,
		5641,
		5643,
		5645,
		5647,
		5649,
		5651,
		5653,
		5657,
		5659,
		5661,
		5663,
		5665,
		5667,
		5669,
		5671,
		5673,
		5675,
		5677,
		5679,
		5681,
		5683,
		5685,
		5687,
		5689,
		5691,
		5693,
		5695,
		5697,
		5699,
		5701,
		5703,
		5705,
		5707,
		5709,
		5711,
		5713,
		5717,
		5719,
		5721,
		5723,
		5725,
		5729,
		5731,
		5733,
		5737,
		5739,
		5741,
		5743,
		5747,
		5749,
		5751,
		5753,
		5755,
		5757,
		5759,
		5761,
		5763,
		5765,
		5767,
		5769,
		5771,
		5773,
		5775,
		5777,
		5779,
		5781,
		5783,
		5785,
		5787,
		5789,
		5791,
		5793,
		5795,
		5799,
		5801,
		5803,
		5805,
		5807,
		5809,
		5811,
		5817,
		5831,
		5833,
		5835,
		5837,
		5839,
		5841,
		5843,
		5845,
		5847,
		5849,
		5851,
		5853,
		5855,
		5857,
		5863,
		5867,
		5869,
		5871,
		5873,
		5875,
		5877,
		5879,
		5883,
		5885,
		5887,
		5889,
		5891,
		5893,
		5897,
		5901,
		5909,
		5911,
		5913,
		5917,
		5919,
		5921,
		5923,
		5925,
		5927,
		5929,
		5931,
		5933,
		5935,
		5937,
		5939,
		5941,
		5943,
		5945,
		5947,
		5949,
		5951,
		5953,
		5955,
		5957,
		5959,
		5961,
		5963,
		5967,
		5969,
		5973,
		5975,
		5977,
		5979,
		5981,
		5983,
		5985,
		5987,
		5989,
		5991,
		5993,
		5995,
		5997,
		5999,
		6003,
		6005,
		6007,
		6009,
		6011,
		6013,
		6015,
		6017,
		6019,
		6021,
		6023,
		6025,
		6027,
		6029,
		6031,
		6033,
		6037,
		6041,
		6043,
		6045,
		6047,
		6049,
		6051,
		6053,
		6055,
		6057,
		6061,
		6063,
		6065,
		6067,
		6069,
		6073,
		6075,
		6077,
		6079,
		6081,
		6085,
		6087,
		6091,
		6093,
		6095,
		6097,
		6099,
		6101,
		6103,
		6105,
		6107,
		6109,
		6111,
		6113,
		6115,
		6117,
		6121,
		6123,
		6127,
		6129,
		6131,
		6133,
		6135,
		6137,
		6139,
		6141,
		6143,
		6145,
		6147,
		6149,
		6151,
		6153,
		6155,
		6157,
		6159,
		6163,
		6165,
		6167,
		6169,
		6171,
		6173,
		6175,
		6177,
		6179,
		6181,
		6183,
		6185,
		6189,
		6191,
		6195,
		6197,
		6201,
		6203,
		6209,
		6213,
		6215,
		6217,
		6219,
		6221,
		6223,
		6225,
		6227,
		6229,
		6231,
		6233,
		6235,
		6237,
		6239,
		6241,
		6243,
		6245,
		6247,
		6251,
		6255,
		6257,
		6259,
		6261,
		6265,
		6267,
		6269,
		6271,
		6273,
		6275,
		6277,
		6279,
		6281,
		6283,
		6285,
		6287,
		6289,
		6291,
		6293,
		6295,
		6297,
		6299,
		6301,
		6303,
		6309,
		6313,
		6315,
		6319,
		6321,
		6325,
		6327,
		6329,
		6331,
		6333,
		6335,
		6337,
		6339,
		6349,
		6353,
		6357,
		6359,
		6361,
		6363,
		6365,
		6369,
		6373,
		6375,
		6377,
		6379,
		6381,
		6383,
		6385,
		6387,
		6389,
		6391,
		6393,
		6397,
		6403,
		6405,
		6409,
		6411,
		6413,
		6417,
		6419,
		6421,
		6425,
		6427,
		6429,
		6443,
		6445,
		6453,
		6457,
		6459,
		6461,
		6465,
		6467,
		6469,
		6471,
		6475,
		6477,
		6479,
		6483,
		6485,
		6487,
		6489,
		6495,
		6497,
		6501,
		6503,
		6505,
		6513,
		6517,
		6519,
		6521,
		6525,
		6527,
		6529,
		6531,
		6533,
		6535,
		6537,
		6539,
		6541,
		6543,
		6545,
		6547,
		6549,
		6551,
		6553,
		6555,
		6557,
		6559,
		6561,
		6563,
		6565,
		6567,
		6569,
		6583,
		6587,
		6599,
		6601,
		6603,
		6605,
		6607,
		6609,
		6619,
		6625,
		6627,
		6629,
		6633,
		6635,
		6639,
		6641,
		6643,
		6645,
		6647,
		6651,
		6653,
		6657,
		6659,
		6661,
		6663,
		6665,
		6667,
		6669,
		6673,
		6675,
		6677,
		6679,
		6683,
		6685,
		6687,
		6693,
		6695,
		6697,
		6699,
		6707,
		6709,
		6711,
		6717,
		6719,
		6721,
		6723,
		6725,
		6737,
		6741,
		6743,
		6747,
		6749,
		6751,
		6753,
		6755,
		6757,
		6761,
		6765,
		6767,
		6769,
		6773,
		6783,
		6785,
		6787,
		6789,
		6797,
		6801,
		6803,
		6805,
		6809,
		6817,
		6819,
		6821,
		6825,
		6827,
		6829,
		6831,
		6839,
		6841,
		6845,
		6847,
		6849,
		6851,
		6853,
		6855,
		6857,
		6859,
		6861,
		6865,
		6867,
		6869,
		6871,
		6873,
		6875,
		6877,
		6881,
		6883,
		6885,
		6887,
		6889,
		6891,
		6894,
		6896,
		6898,
		6902,
		6906,
		6908,
		6914,
		6916,
		6924,
		6926,
		6928,
		6930,
		6934,
		6936,
		6938,
		6940,
		6942,
		6946,
		6952,
		6954,
		6956,
		6958,
		6964,
		6966,
		6968,
		6970,
		6972,
		6974,
		6976,
		6980,
		6984,
		6986,
		6988,
		6992,
		7000,
		7002,
		7006,
		7008,
		7010,
		7014,
		7016,
		7018,
		7020,
		7022,
		7024,
		7026,
		7028,
		7030,
		7032,
		7034,
		7036,
		7038,
		7041,
		7043,
		7045,
		7049,
		7051,
		7053,
		7055,
		7057,
		7059,
		7063,
		7069,
		7073,
		7081,
		7089,
		7093,
		7096,
		7099,
		7101,
		7103,
		7105,
		7107,
		7109,
		7111,
		7113,
		7115,
		7117,
		7119,
		7121,
		7123,
		7125,
		7127,
		7129,
		7131,
		7133,
		7135,
		7137,
		7141,
		7143,
		7145,
		7148,
		7150,
		7152,
		7154,
		7156,
		7158,
		7160,
		7164,
		7166,
		7168,
		7170,
		7172,
		7176,
		7180,
		7182,
		7190,
		7192,
		7204,
		7248,
		7250,
		7252,
		7284,
		7286,
		7288,
		7331,
		7335,
		7337,
		7339,
		7341,
		7345,
		7349,
		7351,
		7353,
		7355,
		7357,
		7359,
		7361,
		7365,
		7367,
		7373,
		7375,
		7377,
		7379,
		7381,
		7383,
		7385,
		7387,
		7389,
		7391,
		7393,
		7399,
		7401,
		7403,
		7405,
		7407,
		7409,
		7411,
		7424,
		7426,
		7430,
		7432,
		7434,
		7436,
		7438,
		7440,
		7442,
		7448,
		7450,
		7452,
		7454,
		7456,
		7459,
		7461,
		7463,
		7465,
		7469,
		7471,
		7475,
		7477,
		7479,
		7483,
		7485,
		7487,
		7491,
		7497,
		7499,
		7501,
		7503,
		7505,
		7511,
		7513,
		7517,
		7519,
		7523,
		7525,
		7527,
		7533,
		7535,
		7537,
		7539,
		7541,
		7543,
		7545,
		7547,
		7549,
		7555,
		7557,
		7561,
		7563,
		7565,
		7569,
		7571,
		7573,
		7575,
		7577,
		7579,
		7581,
		7583,
		7585,
		7587,
		7589,
		7611,
		7613,
		7621,
		7623,
		7625,
		7627,
		7633,
		7637,
		7639,
		7645,
		7647,
		7649,
		7653,
		7655,
		7657,
		7659,
		7661,
		7663,
		7665,
		7667,
		7669,
		7673,
		7675,
		7677,
		7679,
		7681,
		7683,
		7685,
		7687,
		7691,
		7696,
		7698,
		7700,
		7708,
		7710,
		7712,
		7716,
		7718,
		7722,
		7724,
		7726,
		7732,
		7734,
		7736,
		7740,
		7742,
		7744,
		7748,
		7750,
		7756,
		7767,
		7769,
		7771,
		7773,
		7775,
		7777,
		7779,
		7781,
		7783,
		7785,
		7787,
		7789,
		7791,
		7793,
		7795,
		7799,
		7801,
		7811,
		7813,
		7815,
		7819,
		7823,
		7825,
		7829,
		7831,
		7833,
		7835,
		7839,
		7853,
		7855,
		7857,
		7859,
		7861,
		7863,
		7869,
		7873,
		7875,
		7877,
		7879,
		7881,
		7883,
		7887,
		7889,
		7891,
		7895,
		7899,
		7901,
		7903,
		7909,
		7913,
		7915,
		7922,
		7924,
		7928,
		7932,
		7936,
		7940,
		7942,
		7952,
		7954,
		7956,
		7958,
		7960,
		7962,
		7964,
		7968,
		7970,
		7972,
		7974,
		7976,
		7978,
		7980,
		7984,
		7988,
		7992,
		7994,
		7996,
		7998,
		8002,
		8004,
		8013,
		8019,
		8024,
		8028,
		8030,
		8032,
		8034,
		8036,
		8038,
		8040,
		8046,
		8048,
		8050,
		8052,
		8054,
		8056,
		8058,
		8060,
		8062,
		8064,
		8066,
		8068,
		8070,
		8073,
		8075,
		8077,
		8083,
		8087,
		8089,
		8091,
		8093,
		8095,
		8097,
		8101,
		8103,
		8105,
		8107,
		8109,
		8113,
		8117,
		8121,
		8123,
		8125,
		8127,
		8129,
		8131,
		8133,
		8135,
		8137,
		8141,
		8143,
		8145,
		8147,
		8151,
		8155,
		8157,
		8161,
		8163,
		8165,
		8167,
		8169,
		8171,
		8173,
		8182,
		8184,
		8188,
		8190,
		8194,
		8198,
		8200,
		8202,
		8204,
		8208,
		8210,
		8212,
		8214,
		8218,
		8224,
		8226,
		8228,
		8232,
		8234,
		8238,
		8242,
		8244,
		8248,
		8254,
		8256,
		8260,
		8262,
		8264,
		8266,
		8268,
		8272,
		8278,
		8280,
		8284,
		8286,
		8294,
		8300,
		8302,
		8304,
		8312,
		8314,
		8318,
		8320,
		8322,
		8324,
		8326,
		8328,
		8330,
		8332,
		8334,
		8336,
		8338,
		8340,
		8342,
		8346,
		8350,
		8352,
		8354,
		8356,
		8360,
		8362,
		8364,
		8368,
		8370,
		8374,
		8376,
		8378,
		8380,
		8382,
		8384,
		8386,
		8388,
		8390,
		8392,
		8394,
		8398,
		8400,
		8406,
		8410,
		8412,
		8414,
		8416,
		8420,
		8422,
		8424,
		8426,
		8430,
		8432,
		8434,
		8440,
		8442,
		8444,
		8448,
		8450,
		8452,
		8456,
		8458,
		8462,
		8464,
		8466,
		8468,
		8470,
		8472,
		8474,
		8476,
		8478,
		8482,
		8484,
		8486,
		8488,
		8490,
		8492,
		8494,
		8496,
		8498,
		8500,
		8502,
		8504,
		8506,
		8510,
		8512,
		8514,
		8516,
		8522,
		8524,
		8526,
		8528,
		8530,
		8532,
		8536,
		8538,
		8540,
		8542,
		8546,
		8548,
		8550,
		8552,
		8556,
		8558,
		8560,
		8564,
		8568,
		8572,
		8574,
		8578,
		8580,
		8586,
		8590,
		8592,
		8594,
		8598,
		8602,
		8604,
		8610,
		8612,
		8620,
		8622,
		8624,
		8628,
		8630,
		8632,
		8634,
		8636,
		8638,
		8640,
		8642,
		8644,
		8648,
		8650,
		8654,
		8658,
		8660,
		8662,
		8664,
		8666,
		8668,
		8674,
		8676,
		8678,
		8680,
		8686,
		8690,
		8698,
		8702,
		8704,
		8706,
		8708,
		8710,
		8712,
		8714,
		8716,
		8718,
		8720,
		8742,
		8744,
		8746,
		8750,
		8752,
		8754,
		8756,
		8764,
		8768,
		8770,
		8776,
		8778,
		8780,
		8782,
		8784,
		8788,
		8792,
		8794,
		8798,
		8802,
		8808,
		8810,
		8812,
		8814,
		8816,
		8818,
		8820,
		8822,
		8824,
		8826,
		8830,
		8832,
		8840,
		8850,
		8854,
		8856,
		8858,
		8860,
		8862,
		8864,
		8866,
		8868,
		55537,
		55539,
		55598,
		55602,
		55604,
		55606,
		60895,
		60897,
		60899,
		60901,
		60905,
		60907,
		60909,
		60913,
		60919,
		60921,
		60923,
		60925,
		60927,
		60929,
		60931,
		61335,
		61410,
		61617,
		62160,
		62229,
		62807,
		65379,
		65381,
		65383,
		65385,
		65392,
		65394,
		65396,
		65398,
		65411,
		65627,
		65631,
		66336,
		66407,
		66411,
		66416,
		66423,
		66427,
		66429,
		66432,
		66435,
		66437,
		66441,
		66444,
		66446,
		66448,
		66452,
		66456,
		66476,
		66478,
		66480,
		66482,
		66484,
		66506,
		66511,
		66516,
		66532,
		66535,
		66543,
		66600,
		66770,
		67409,
		67411,
		67413,
		67424,
		67444,
		67480,
		67639,
		67889,
		67893,
		67936,
		67956,
		67969,
		68001,
		68010,
		68127,
		68411,
		68906,
		68979,
		68989,
		68991,
		68994,
		68998,
		69011,
		69015,
		69081,
		69360,
		69966,
		69970,
		69976,
		69983,
		69986,
		70007,
		70085,
		70098,
		74023,
		75248,
		75252,
		75273,
		75330,
		75430,
		75436,
		75441,
		75445,
		75450,
		75560,
		75562,
		75566,
		75688,
		75964,
		75968,
		76104,
		76106,
		76108,
		76117,
		76670,
		76724,
		77027,
		77797,
		78102,
		78949,
		78962,
		78967,
		78970,
		78975,
		78987,
		79328,
		7631,
		7938,
		8115,
		8428,
		6119,
		7671,
		7966,
		8000,
		8079,
		8220,
		8222,
		8240,
		8316,
		8508,
		8554,
		8672,
		8682,
		8722,
		60903,
		60917,
		76820
);

	
	for ($m = 1500; $m < 1700; $m++) {
		if (!isset($books[$m]))
			continue;
		//foreach ($books as $singlebook) {
			$obEl = new CIBlockElement();
			//$boolResult = $obEl->Update($singlebook,array('ACTIVE' => 'Y'));

			$recs = json_decode(file_get_contents('http://api.retailrocket.ru/api/1.0/Recomendation/UpSellItemToItems/50b90f71b994b319dc5fd855/'.$books[$m]));
			
			$ok = false;
			$i = 0;
			
			while ($ok == false) {
				$url = "http://api5.alpinadigital.ru/api/v1/gift/emag/?emag_id=".$recs[$i];
				  
				$ch = curl_init();  
				  
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HTTPHEADER,
					array(
						"Content-type: application/json",
						"X-AD-Email: emaguser",
						"X-AD-Offer: 1",
						"X-AD-Token: cde70efb6367aa336325c95e083b458b"
					)
				);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
				curl_setopt($ch, CURLOPT_POST, 1);  
		  
				$output = curl_exec($ch);  
				  
				curl_close($ch);  

				$output = get_object_vars(json_decode(preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
					return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
				}, $output))[0]);
				
				if (isset($output["url"])) {
					$ok = true;
					$obEl = new CIBlockElement();
					CIBlockElement::SetPropertyValuesEx($books[$m], 4, array('rec_for_ad' => $recs[$i]));				
					echo $books[$m]." ".$recs[$i]."<br />";
				}
				$i++;
				if ($i > 10) {
					$ok = true;
					echo $books[$m]." error<br />";
				}
					
			}

		//}
	}

} else {
	echo "Not authorized";
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
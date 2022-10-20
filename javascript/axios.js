// react-salary/src/pages/Works/Works.js
axios
  .get(url.works.read, {
    params: {
      from: from,
      to: to,
    },
  })
  .then((res) => {
    // 判斷後端傳回的值是否為空
    if (Object.keys(res.data).length > 0) setRows([...rows, ...res.data]);
  });

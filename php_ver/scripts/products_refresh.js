// 1. Create a helper function that returns a Promise that resolves after X milliseconds
const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

async function refreshInst(func) {
  const delay = 60 * 1000;

  while (true) {
    await func();

    await sleep(delay);
  }
}

async function refreshDiv() {
    const response = await fetch('fetchrandprod.php');

    if (!response.ok) {
        throw new Error(`Product refresh failed: ${response.status}`);
    }

    document.getElementById('randprodcont').innerHTML = await response.text();
}

refreshInst(refreshDiv).catch(error => console.error('Error refreshing div:', error));
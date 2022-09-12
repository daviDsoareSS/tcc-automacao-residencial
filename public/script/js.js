window.addEventListener('load', ()=>{
    registerSW()
})

async function registerSW(){
    if('serviceWorker' in navigator){
        try{
            await navigator.serviceWorker.register('./sw.js')
        } catch(e){
            console.log(`SW registration failed`);
        }
    }
}

/* Modal */
    setTimeout(function openModal(){
        const modal = document.querySelector('modal');
        modal.style.display = 'block';
        console.log('Ola mundo');
},2000);

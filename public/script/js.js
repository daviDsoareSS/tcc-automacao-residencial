window.addEventListener('load', ()=>{
    registerSW()
})

async function registerSW(){
    if('serviceWorker' in navigator){
        try{
            await navigator.serviceWorker.register('script/sw.js')
        } catch(e){
            console.log(`SW registration failed`);
        }
    }
}


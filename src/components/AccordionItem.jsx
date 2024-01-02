import setColor from "@/utils/setColor"

function AccordionItem({ icon=null, bgColor, textColor="#FFFFFF", title, children }) {
  document.addEventListener('DOMContentLoaded', function () {
    // Seleciona o elemento SVG
    var meuSvg = document.getElementById('meuSvg');

    // Modifica a cor do SVG
    meuSvg.addEventListener('load', function () {
        var svgDoc = meuSvg.contentDocument;
        var pathElement = svgDoc.querySelector('path'); // Substitua 'path' com o seletor apropriado
        pathElement.style.fill = 'red'; // Altere a cor conforme necessário
    });
});
  return (
    <div style={{ backgroundColor: `${setColor(bgColor)}`, color: `${setColor(textColor)}`}} className="collapse collapse-arrow shadow-lg">
      <input type="radio" name="accordion" />
      <div className="collapse-title text-xl font-medium flex flex-row gap-5">
        <img src={icon} id="meuSvg"/>
        <span className="uppercase font-bold">{title}</span>
      </div>
      <div className="collapse-content text-xl px-16">
        {children}
      </div>
    </div>
  )
}

export default AccordionItem;

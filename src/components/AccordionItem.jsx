import setColor from "@/utils/setColor"

function AccordionItem({ icon=null, bgColor, textColor="#FFFFFF", title, children }) {
  return (
    <div style={{ backgroundColor: `${setColor(bgColor)}`, color: `${setColor(textColor)}`}} className="collapse collapse-arrow shadow-lg">
      <input type="radio" name="accordion" />
      <div className="collapse-title text-xl font-medium flex flex-row gap-5">
        <img src={icon} style={{color: 'white'}}/>
        <span className="uppercase font-bold">{title}</span>
      </div>
      <div className="collapse-content text-xl px-16">
        {children}
      </div>
    </div>
  )
}

export default AccordionItem;
